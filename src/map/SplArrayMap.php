<?php

namespace sethink\functionLib\map;

class SplArrayMap
{


    /**
     * 注：只能处理一维数组
     * @删除指定值
     *
     * @param $delArray
     * @param $array
     * @return array
     */
    public function deleteValue($delArray, $array)
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
    public function getColumnValue($column, $array)
    {
        return array_column($array, $column);
    }


    /**
     * @数组去重
     *
     * @param $array
     * @return array
     */
    public function unique($array)
    {
        return array_merge(array_unique($array));
    }


    /**
     * @获取重复值
     *
     * @param $array
     * @return array
     */
    public function multiple($array)
    {
        return array_merge(array_diff_assoc($array, $this->unique($array)));
    }


}

