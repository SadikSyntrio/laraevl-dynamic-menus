<?php


// MyVendor\Contactform\src\Models\ContactForm.php
namespace MyVendor\ContactForm\Models;
use Illuminate\Database\Eloquent\Model;
class ContactForm extends Model
{
    protected $guarded = [];
    // protected $fillable = ['name','email','message'];
    protected $table = 'contact';
}