<?php

	$orders = array(
    array("name" => "홍수", "products" => array(
        array("name" => "Laptop", "quantity" => 1, "price" => 900),
        array("name" => "Mouse", "quantity" => 2, "price" => 20)
    )),
    array("name" => "게이츠", "products" => array(
        array("name" => "Keyboard", "quantity" => 1, "price" => 50),
        array("name" => "Monitor", "quantity" => 1, "price" => 150)
    )),
    array("name" => "스티브", "products" => array(
        array("name" => "Phone", "quantity" => 1, "price" => 600),
        array("name" => "Charger", "quantity" => 1, "price" => 25)
    ))
 	);

	function total_pay($product)
	{
		$pay = 0;
		foreach($product as $how){
			
			$cal = $how["quantity"] * $how["price"];
			$pay += $cal;
		}
		return $pay;
		
	}

	function discount($total){
		if ($total >= 100)
		{
			$discount = 0.9;
		}
		else
		{
			$discount = 1;
		}
		return $total * $discount;
	}

	$highest_price = 0;
	$highest_product = "";

	foreach($orders as $order)
	{
		$product = $order["products"];

		$total_pay = total_pay($product);
		echo $total_pay."<br>";
		$discount = discount($total_pay);
		
		foreach ($product as $detail)
		{
			if ($detail["price"] > $highest_price)
			{
					$highest_price = $detail["price"];
					$highest_product = $detail["name"];
				}
			}

		}

		echo $highest_product.$highest_price."의 총금액/할인 금액 ".$total_pay." / ". $discount."<br>";
	
?>
