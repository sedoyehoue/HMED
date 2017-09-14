<?php
$osb__cart = Cookie::get('osb__cart')==true?unserialize(Cookie::get('osb__cart')):array();

switch($type):
	
	case 'add':
		$data = Engine::data($_POST['ord']);
		if(in_array($data['ORD_PRODUCT'] , array_column($osb__cart, 'ORD_PRODUCT')) == true){
			$osb__cart[$data['ORD_PRODUCT']]['ORD_QUANTITY'] = $osb__cart[$data['ORD_PRODUCT']]['ORD_QUANTITY'] + $data['ORD_QUANTITY'];
		}else{
			$osb__cart[$data['ORD_PRODUCT']] = array(
				'ORD_PRODUCT'=>$data['ORD_PRODUCT'],
				'ORD_PRODUCT_NAME'=>$data['ORD_PRODUCT_NAME'],
				'ORD_PRODUCT_IMAGE'=>$data['ORD_PRODUCT_IMAGE'],
				'ORD_PRODUCT_URL'=>$data['ORD_PRODUCT_URL'],
				'ORD_QUANTITY'=>$data['ORD_QUANTITY']
			);
		}
	break;
	
endswitch;

Cookie::set('osb__cart' , serialize($osb__cart));
$osb__cart = Cookie::get('osb__cart') == true?unserialize(Cookie::get('osb__cart')):array();
$_SESSION['osb__cart'] = $osb__cart;

echo '<a class="cart-area floatright" href="javascript:;"><i class="fa fa-shopping-cart"></i><span>'.count(Session::get('osb__cart')).'</span></a>';
echo '<ul>';

foreach(Session::get('osb__cart') as $ord):
	echo '<li>
				<div class="cart-single-product">
                        <div class="media">
                          <div class="pull-left cart-product-img"> <a href="'.$ord['ORD_PRODUCT_URL'].'"> <img alt="'.ucwords($ord['ORD_PRODUCT_NAME']).'" src="'._WEB_.'img/prs/'.$ord['ORD_PRODUCT_IMAGE'].'" class="media-object"> </a> </div>
                          <div class="media-body cart-content">
                            <h4 class="media-heading"><a href="'.$ord['ORD_PRODUCT_URL'].'">'.ucwords($ord['ORD_PRODUCT_NAME']).'</a></h4>
                            <a class="trash hide" href="javascript:;"><i class="fa fa-trash-o"></i></a>
                            <p>Quantity : '.$ord['ORD_QUANTITY'].'</p>
                          </div>
                        </div>
                      </div>
			</li>';
endforeach;

if( Cookie::get('osb__cart') == true ):
echo '<li><a class="checkout-button" href="'.WEB.'products/cart'.'">Cart</a></li>';
endif;
echo '</ul>';