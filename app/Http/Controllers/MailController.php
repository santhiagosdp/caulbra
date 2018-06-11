<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {
   public function basic_email(){
      $data = array('name'=>"CAULBRA");
   
      Mail::send(['text'=>'mail'], $data, function($message) {
         $message->to('santhiago.fortaleza@gmail.com', '')->subject
            ('Laravel Basic Testing Mail');
         $message->from('santhiagosdp@gmail.com','CAULBRA');
      });
      echo "Basic Email Sent. Check your inbox.";
   }
   public function html_email(){
      $data = array('name'=>"CAULBRA");
      Mail::send('mail', $data, function($message) {
         $message->to('santhiago.fortaleza@gmail.com', '')->subject
            ('Laravel HTML Testing Mail');
         $message->from('santhiagosdp@gmail.com','CAULBRA');
      });
      echo "HTML Email Sent. Check your inbox.";
   }
   public function attachment_email(){
      $data = array('name'=>"CAULBRA");
      Mail::send('mail', $data, function($message) {
         $message->to('santhiago.fortaleza@gmail.com', '')->subject
            ('Laravel Testing Mail with Attachment');
         $message->attach('C:\xampp\htdocs\docs\Estagio\caulbra\ca\emitidos\teste.rar');
         $message->attach('C:\xampp\htdocs\docs\Estagio\caulbra\public\uploads\teste.txt');
         $message->from('santhiagosdp@gmail.com','CAULBRA');
      });
      echo "Email Sent with attachment. Check your inbox.";
   }
}