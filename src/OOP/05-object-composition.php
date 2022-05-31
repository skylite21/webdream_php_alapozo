<?php

// object composition: egy class-ban használunk egy másik class-t
// constructor injection vagy
// dependency injection-nek is szokták nevezni
class Subscription {
  protected Gateway $gateway;

  public function __construct(Gateway $gateway) {
    $this->gateway = $gateway;
  }

  public function create() : void {
  }
  public function cancel() : void {
    // api request
    // find customer
    // find Subscription by customer
  }
  public function invoice() : void {
  }
}

// interface-ben nincsen működő kód, csak egy váz
// ami egy megállapodás arra vonatkozóan hogy ha valaki
// ezt az interface-t implementálja akkor kötelező neki
// ilyen nevű metódusokat létrehozni
interface Gateway {
  public function find_customer() : void;
  public function find_subscription_by_customer() : void;
}



class PaypalGateway implements Gateway {
  public function find_customer() : void {
  }
  public function find_subscription_by_customer() : void {
  }
}


