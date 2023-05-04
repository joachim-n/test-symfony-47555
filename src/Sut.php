<?php

namespace Joachim\TestSymfony47555;

class Sut {

  public function doSomething() {
    @trigger_error('Your deprecation message', E_USER_DEPRECATED);
  }

}