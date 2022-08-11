<br /><br />
<?php  if (isset($_SESSION['auth'])) {
    $rows = get_field('glava'); ?>
    <div class="container">
        <div class="row">

            <div class="col-st-3" id="block1">
                <div class="raz">
                    <h3 style="font-size: 20px;margin-bottom: 15px;">Информационная База Данных</h3>

                    <ol class="ol_num" style="padding: 0;">
                        <?php
                            if ($rows !==null) {
                                $k=0;
                                foreach ($rows as $r) {
                                    $k++; ?>
                                    <li class="menu_p"><a href="#" onclick="st('<?php echo $k; ?> ');<?php if ($r['tekst'] && $k!=1) { ?>hide_menu();<?php } ?>" ><?php echo $r['nazvanie']; ?></a>
                                        <?php if ($r['glava_pod']) { ?>
                                            <ol class="ol_num pft" style="display: none" id="k_<?php echo $k; ?>">
                                                <?php $k2=0; foreach ($r['glava_pod'] as $r2) {
                                        $k2++; ?>


                                                    <li class="menu_p"><a href="#" onclick="st('<?php echo $k; ?>','<?php echo $k2; ?>'); <?php if ($r2['tekst']) { ?>hide_menu();<?php } ?>"><?php echo $r2['nazvanie']; ?></a>
                                                        <?php if ($r2['glava_pod_pod']) { ?>
                                                            <ol class="ol_num pft" style="display: none" id="k_<?php echo $k; ?>_<?php echo $k2; ?>">
                                                                <?php $k3=0; foreach ($r2['glava_pod_pod'] as $r3) {
                                            $k3++; ?>
                                                                    <li class="menu_p"><a href="#" onclick="st('<?php echo $k; ?>','<?php echo $k2; ?>','<?php echo $k3; ?>');<?php if ($r3['tekst']) { ?>hide_menu();<?php } ?>"><?php echo $r3['nazvanie']; ?></a></li>
                                                                    <?php
                                        } ?>
                                                            </ol>
                                                        <?php } ?>



                                                    </li>
                                                    <?php
                                    } ?>
                                            </ol>
                                        <?php } ?>


                                    </li>
                                    <?php
                                }
                            } else {
                                // Empty rows
                            } ?>
                    </ol>

                </div>
            </div>
            <div class="col-st-9" id="block2">
                <div class="block_one">

                    <div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
                                    <div class="wpb_single_image wpb_content_element vc_align_center">

                                        <figure class="wpb_wrapper vc_figure">
                                            <div class="vc_single_image-wrapper vc_box_border_grey">
                                                <img src="<?php echo $abstractData->getDomain(). '/wp-content/uploads/2022/03/infoavtobaza.png' ?>" width="510" height="270"
                                                     class="vc_single_image-img attachment-full" alt="" loading="lazy" title="ИнфоАвтоБаза">
                                            </div>
                                        </figure>
                                    </div>
                                </div></div></div></div>

                    <p style="text-align: center">Выберите интересующую Вас тему</p>

                </div>

                <?php

                if ($rows !==null) {
                    $k=0;
                    foreach ($rows as $r) {
                        $k++; ?>
                        <div style="display: none" id="text_<?php echo $k; ?>" class="text_block">
                            <?php echo $r['tekst'] ; ?>
                            <?php if ($r['ssylka_na_fajl']) { ?>
                                <a href="<?php echo $r['ssylka_na_fajl']; ?>" class="link_down">Скачать файл</a>
                            <?php } ?>
                        </div>
                        <?php $kk=0;
                        if ($r['glava_pod']) { ?>
                            <?php $k2=0; foreach ($r['glava_pod'] as $r2) {
                            $k2++;
                            $kk++; ?>

                                <div style="display: none" id="text_<?php echo $k; ?>_<?php echo $k2; ?>" class="text_block <?php if ($kk==1) {?>open_mobs <?php } ?>">
                                    <?php echo $r2['tekst'] ; ?>
                                    <?php if ($r2['ssylka_na_fajl']) { ?>
                                        <a href="<?php echo $r2['ssylka_na_fajl']; ?>" class="link_down">Скачать файл</a>
                                    <?php } ?>
                                </div>
                                <?php if ($r2['glava_pod_pod']) { ?>

                                    <?php $k3=0; foreach ($r2['glava_pod_pod'] as $r3) {
                                $k3++; ?>
                                        <div style="display: none" id="text_<?php echo $k; ?>_<?php echo $k2; ?>_<?php echo $k3; ?>" class="text_block">
                                            <?php echo $r3['tekst'] ; ?>
                                            <?php if ($r3['ssylka_na_fajl']) { ?>
                                                <a href="<?php echo $r3['ssylka_na_fajl']; ?>" class="link_down">Скачать файл</a>
                                            <?php } ?>
                                        </div>
                                        <?php
                            } ?>

                                <?php } ?>

                                <?php
                        } ?>
                        <?php } ?>

                        <?php
                    }
                } else {
                    // Empty rows
                } ?>
            </div>
        </div>
    </div>
<?php
} ?>
