<?php


// MyVendor\Contactform\src\Models\ContactForm.php
namespace MySyntrio\contactform\Models;
use Illuminate\Database\Eloquent\Model;
class ContactForm extends Model
{
    protected $guarded = [];
    // protected $fillable = ['name','email','message'];
    protected $table = 'contact';
}