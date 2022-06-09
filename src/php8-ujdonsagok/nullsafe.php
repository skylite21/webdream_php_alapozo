<?php

namespace php8;

class User {
  public function profile() : Profile|null {
    // return new Profile();
    return null;
  }
}

class Profile {
  public function employment() :string {
    return 'web developer';
  }
}

$user = new User();

// echo $user->profile()->employment();
// $profile = $user->profile();
// if($profile) {
//   echo $profile->employment();
// } else {
//   echo 'not provided';
// }

echo $user->profile()?->employment() ?? 'Not provided';
