Click here to reset your password: <a href="{{ $link = url('administratorc51/password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}"> {{ $link }} </a>
