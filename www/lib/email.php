<?php
include_once '../lib/class.phpmailer.php';
include_once '../lib/class.smtp.php';
  
$email=new PHPMailer();  // 定义一个很多对象的邮件变量函数                   new 实例化$eamil类，这个类里面有很多方法   PHPMailer是一个用于发送电子邮件的PHP函数包。

$email->SMTPDebug=true;           //  是否显示发送过程中的信息                     false 是不用返回值 不输出值     TRUE  是会输出文档信息
$email->IsSMTP();                  //
$email->SMTPAuth=TRUE;
$email->Host='smtp.163.com';              //需要发送邮件的主机       通常是smtp.xx.com  xx代表qq，163,126；
$email->Username='17635438954@163.com';                      //发送邮箱的账号
$email->Password='lxp1234';                    // 授权码 在邮箱里面设置  密码
$email->From='17635438954@163.com';                         //从哪里发送
$email->CharSet='utf-8';
$email->AddAddress("2672947175@qq.com");                //接收邮件的地址
$email->Subject='jdkdfjdskf';                     //邮件标题
$email->Body="weiwei";                        //邮件内容
$bool = $email->send();

?>

