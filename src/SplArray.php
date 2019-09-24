<?php

namespace sethink\phpLib;


class SplArray
{

    /**
     * 注：只能处理一维数组
     * @删除指定值
     *
     * @param $delArray
     * @param $array
     * @return array
     */
    public static function deleteValue($delArray, $array)
    {
        return array_merge(array_diff($array, $delArray));
    }


    /**
     * @获取指定列的值(多维数组)
     *
     * @param $column
     * @param $array
     * @return array
     */
    public static function getColumnValue($column, $array)
    {
        return array_column($array, $column);
    }


    /**
     * @数组去重
     *
     * @param $array
     * @return array
     */
    public static function unique($array)
    {
        return array_merge(array_unique($array));
    }


    /**
     * @获取重复值
     *
     * @param $array
     * @return array
     */
    public static function multiple($array)
    {
        return array_merge(array_diff_assoc($array, self::unique($array)));
    }

    /**
     * @二维数组指定列排序
     * @param $column
     * @param string $sort
     * @param $array
     * @return mixed
     */
    public static function multiSort($column, $sort = 'asc', $array)
    {
        $sort_column = array_column($array, $column);
        $sort        = strtolower($sort);
        if ($sort == 'asc') {
            $sort = SORT_ASC;
        } elseif ($sort == 'desc') {
            $sort = SORT_DESC;
        } else {
            $sort = SORT_ASC;
        }

        array_multisort($sort_column, $sort, $array);

        return $array;
    }

}