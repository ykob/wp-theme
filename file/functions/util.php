<?php
  // 汎用関数

  // 10000以上の数を指定すると1000未満を省略して返す。
  function omitNumber($num) {
    $int_num = intval(str_replace(',', '', $num));
    if ($int_num >= 10000) {
      return floor($int_num / 1000). 'k';
    } else {
      return $num;
    }
  }
?>
