<?php
class Mail_model extends CI_Model {
   
	public function send_message($to,$subject,$message){

		$from_email = 'biuro@cssoft.pl';
		$from_name = 'KR CSSoft';
		
		$this->load->library('email');
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;			
		$config['useragent'] = 'Agent'; // The "user agent".
		$config['protocol'] = 'smtp'; // mail, sendmail, or smtp    The mail sending protocol.
		$config['smtp_host'] = 'smtp.host'; // SMTP Server Address.
		$config['smtp_user'] = 'user'; // SMTP Username.
		$config['smtp_pass'] = 'pass'; // SMTP Password.
		$config['smtp_port'] = '587'; // SMTP Port.
		$config['wordwrap'] = TRUE; // TRUE or FALSE (boolean)    Enable word-wrap.
		$config['wrapchars'] = 76; // Character count to wrap at.
		$config['mailtype'] = 'html';
		$config['charset'] = 'utf-8'; // Character set (utf-8, iso-8859-1, etc.).
		$config['validate'] = FALSE; // TRUE or FALSE (boolean)    Whether to validate the email address.
		$config['priority'] = 3;
		$this->email->initialize($config);
		$this->email->from($from_email, $from_name);
		$this->email->to($to);
 		$this->email->subject($subject);
		$this->email->message('<html>
			<body>'.$message.'</body>
		</html>');
		$this->email->send();
		
		$mail = array(		
			'from' => $from_email.' ('.$from_name.')',
			'to' => $to,
			'subject' => $subject,			
			'content' => $message
		);		
		$this->db->insert('emails', $mail);	
	}
}