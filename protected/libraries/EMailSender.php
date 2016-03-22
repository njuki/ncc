<?php

class EMailSender {

    public function emailSend($to, $message, $subject) {

        $from = "jnjuki@gmail.com";
        $host = "173.194.69.108";
        $port = "587";
        $username = "jnjuki";
        $password = "digni09?";

        $headers = array('From' => $from,
            'To' => $to,
            'Subject' => $subject);
        $smtp = Mail::factory('smtp', array('host' => $host,
                    'port' => $port,
                    'auth' => true,
                    'username' => $username,
                    'password' => $password));

        $mail = $smtp->send($to, $headers, $message);

        if (PEAR::isError($mail)) {
            // echo("<p>" . $mail->getMessage() . "</p>");exit;
            return 0;
        } else {

            //echo("<p>Message successfully sent!</p>");exit;

            return 1;
        }
    }

    public function sendEmail($subject, $to, $name, $body) {


        Yii::import('application.extensions.phpmailer.JPhpMailer');
        $mail = new JPhpMailer;
        $mail->IsSMTP();
        //enable SMTP authentication
        $mail->SMTPAuth = true;
        //sets the prefix to the server
        $mail->SMTPSecure = "ssl";
        //sets GMAIL as the SMTP server
        $mail->Host = 'smtp.gmail.com';

        $mail->Port = '587';
        //GMAIL username
        $mail->Username = 'jnjuki103@gmail.com';
        //GMAIL password
        $mail->Password = 'digni09?';

        $mail->From = 'jnjuki103@gmail.com';
        $mail->FromName = 'NCC Portal';
        $mail->AddReplyTo($to, $name);
        $mail->Subject = $subject;
        $mail->SMTPDebug = 1;
        $mail->SMTPSecure = 'tls';

        $mail->Body = $body;
        $mail->IsHTML(true);

        $mail->AddAddress($to, $name);

        try {
            if (!$mail->Send()) {

                $this->flogger("EMAIL SEND FAILURE", 'ERROR', "Unable to send email.Error :- " . CJSON::encode($mail->ErrorInfo) . ' Details : To ' . $to . ' Subject :' . $subject . ' Message :' . $body);

                //Yii::app()->user->setFlash('error'," Mail not sent".$mail->ErrorInfo);
                return $mail->ErrorInfo;
            } else {

                //Yii::app()->user->setFlash('success'," Reset successfully");
                //echo 'Mail send';
                $mail->ClearAddresses();
                $mail->ClearAttachments();
                return 1;
            }
        } catch (Exception $e) {
            $this->flogger("EMAIL SEND FAILURE", 'INFO', "Unable to send email.Error :- " . CJSON::encode($mail->ErrorInfo) . ' Details : To ' . $to . ' Subject :' . $subject . ' Message :' . $body);
        }
    }

    public function flogger($type, $logfile, $string, $line = NULL) {

        date_default_timezone_set('Africa/Khartoum');
        $date = date("Y-m-d H:i:s");
        $file = Yii::app()->params['logurl'] . $logfile . '.log';



        if ($fo = fopen($file, 'ab')) {
            fwrite($fo, "$date - [ $type ] " . $line . " | $string\n");
            fclose($fo);
        } else {
            trigger_error("flog Cannot log '$string' to file '$file' ", E_USER_WARNING);
        }
    }

    public static function loadEvent($id) {

        $model = EventDetails::model()->findByPk($id);

        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    public function generatePassword($length, $complexity = 0) {
        $a = explode(',', 'a,e,i,o,u'); //vowels
        $b = explode(',', 'b,c,d,f,g,h,j,k,l,m,n,p,q,r,s,t,v,w,x,y,z'); //soft consonants
        $c = explode(',', '0,1,2,3,4,5,6,7,8,9'); //numbers
        $d = explode('`', ',`.`?`;`:`|`\`/`<`>`#`$`%`&`_`=`+`-`[`]`{`}`(`)'); //symbols
        $e = explode(',', 'f,h,j,l,m,n,s,w'); //fouregn vowels used outside english language
        $z = explode(',', 'a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z'); //alphabet

        $vowels = $a;
        $consonants = $b;
        $numbers = $c;
        $symbols = $d;
        if ($complexity > 0) // use foureign vowels
            $vowels = array_merge_recursive($a, $a, $a, $a, $e);

        $s = '';
        for ($i = 0; $i < $length; $i++) {
            $x = '';
            if ($i % 2 == 1) { // every second
                $x .= $vowels[rand(0, count($vowels) - 1)];
            } else {
                $x .= $consonants[rand(0, count($consonants) - 1)];

                if (rand(0, 9) == 1) { //--1/6 soft consonants
                    $x .= $e[rand(0, count($e) - 1)];
                    $i++;
                }

                if ($complexity > 1 and rand(0, 5) == 2) { //--1/6 numbers
                    $x .= $numbers[rand(0, count($numbers) - 1)];
                    $i++;
                }

                if ($complexity > 2 and rand(0, 5) == 3) { //--1/6 random leters
                    $x .= $z[rand(0, count($z) - 1)];
                }

                if ($complexity > 3 and rand(0, 5) == 1) { //--1/6 symbols
                    $x .= $symbols[rand(0, count($symbols) - 1)];
                    $i++;
                }
            }
            //echo "[($i) $x]";
            if ($complexity > 0 and rand(0, 5) == 1)
                $x = strtoupper($x);

            if ($complexity > 3 and rand(0, 5) == 1)
                $x = strtoupper($x);

            $s .= $x;
        }
        return substr($s, 0, $length);
    }

}

?>
