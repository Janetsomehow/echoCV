<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invitations extends Model
{
    protected $fillable = [
        'email','permission', 'invitation_token', 'registered_at',
    ];

    public function generateInvitationToken() {
        $this->invitation_token = substr(md5(rand(0, 9) . $this->email . time()), 0, 32);
    }
}
