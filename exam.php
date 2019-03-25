<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/25
 * Time: 8:44
 */
$arr = [1,2,3,4];
function fun1($arr)
{
    $r = [];
    for ($i = 0;$i < count($arr);$i++)
    {
        for ($j = 0;$j < count($arr);$j++)
        {
            for ($k = 0;$k < count($arr);$k++)
            {
                if ($arr[$i]!=$arr[$j] && $arr[$j]!=$arr[$k] && $arr[$i]!=$arr[$k])
                {
                    $r[] = $arr[$i].$arr[$j].$arr[$k];
                }
            }
        }
    }
    echo json_encode($r);
}
fun1($arr);
echo "<hr/>";

$dir = 'D:\phpStudy2\PHPTutorial\WWW\5.5\zhoukao2';
function my_dir($dir)
{
    $handle = opendir($dir);
    while ((is_dir(handle))!==false)
    {
        if ($file=='.'||$file=='..')
        {
            continue;
        }
        $filePath = $dir.'/'.$file;
        if (is_dir($filePath))
        {
            my_dir($filePath);
        }
        else
        {
            echo $filePath.'/r/n';
        }
    }

}
my_dir($dir);
echo "<hr/>";
$aPath='/a/b/c/d/test.php';
$bPath="/a/b/d/c/test.php";
function findCommonPath($aPath,$bPath)
{
    $ap = explode('/',$aPath);
    $bp = explode('/',$bPath);
    $p=[];
    for ($i=0;$i<count($ap);$i++)
    {
        if ($ap[$i]==$bp[$i])
        {
            $p[] = $ap[$i];
        }
        else
        {
            break;
        }
    }
    echo implode('/',$p);
}
findCommonPath($aPath,$bPath);
