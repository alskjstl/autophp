<?php

/**
 * @author ricolau<ricolau@foxmail.com>
 * @version 2014-03
 * @desc exception_auto
 *        generally throw from auto only!
 *
 */
class exception_render extends exception_base {
    const type_tpl_not_exist = 1;
    const type_slot_not_exist = 2;
    const type_render_engine_not_exist = 3;
}