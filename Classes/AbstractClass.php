<?php


/**
 *
 */
class AbstractClass
{

    /**
     * @return string
     */
    public function getRandomNumber()
    {
        $rand = rand(111111, 999999).rand(111111, 999999);
        return $rand;
    }

    public function auth()
    {
        if (!session_id()) {
            session_start();
        }

        if (isset($_REQUEST['token_v1'])) {
            if (isset($_REQUEST['name_v1'])) {
                $name = strip_tags($_REQUEST['name_v1']);
            }
            if (isset($_REQUEST['secondname_v1'])) {
                $secondname = strip_tags($_REQUEST['secondname_v1']);
            }
            if (isset($_REQUEST['lastname_v1'])) {
                $lastname = strip_tags($_REQUEST['lastname_v1']);
            }
            if (isset($_REQUEST['telephone_v1'])) {
                $phone = strip_tags($_REQUEST['telephone_v1']);
                $phone = preg_replace("/[^0-9]/", '', $phone);
            }
            $cert = strip_tags($_REQUEST['cert_v1']);
        }

        if ($name!=""  && $lastname!="" && $cert!="") {
            if ($name!=""  && $lastname!="" && $cert!="") {
                $result = crest::call(
                    'crm.deal.list',
                    [
                        'filter' => [
                            'UF_CRM_1639293355867' => $cert
                        ],
                        'select' => [
                            'ID',
                            'DATE_CREATE'
                        ]
                    ]
                );
            }
            if ($result['total'] !==0) {
                $id_lead=$result['result'][0]['ID'];

                $result = crest::call(
                    'crm.deal.contact.items.get',
                    [
                        'id' => $id_lead

                    ]
                );
                if (isset($result['result'][0])) {
                    $id_contact=$result['result'][0]['CONTACT_ID'];

                    $result = crest::call(
                        'crm.contact.get',
                        [
                            'id' => $id_contact

                        ]
                    );
                }
            }

            $_SESSION['auth'] = $cert;
            return $result;
        } else {
            return null;
        }
    }

    /**
     * @return void
     */
    public function logout($redirect)
    {
        if (session_id()) {
            if (isset($_GET['logout'])) {
                session_destroy();
                header("Location: http://".$_SERVER['HTTP_HOST'].$redirect);
                exit;
            }
        }
    }
}
