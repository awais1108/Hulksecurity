<?php 

//Decode product code
function decodeproductcode($product,$productcode)
{
    if(isset($productcode) and isset($product)){
    $id=$productcode;
    // This will search for the word start at the beginning of the string and remove it
    $id=ltrim($id, 'PPK');  
    // This will search for the word end at the end of the string and remove it
     $productcode=rtrim($id, 'MrrTT');
     
        return array($product,$productcode);
    
    }

    
}


// for all category in Menu
function allcategoryonmenu()
{
    include("include/conn.php"); 
    $ret=mysqli_query($db,"select id,categoryName from category order by id desc limit 8");
    while ($row=mysqli_fetch_array($ret)) 
    {
        $cid=$row['id'];
        $ccid="PPK".$cid."MrrTT";
        $category=$row['categoryName'];
   
         echo '
         <a href="category.php?page=category&id='.$ccid.'">- '.$category.'</a>
         ';
        
    }
}

// for all category in Mobile Menu
function allcategoryonmblemenu()
{
    include("include/conn.php"); 
    $ret=mysqli_query($db,"select id,categoryName from category order by id desc limit 8");
    while ($row=mysqli_fetch_array($ret)) 
    {
        $cid=$row['id'];
        $ccid="PPK".$cid."MrrTT";
        $category=$row['categoryName'];
   
         echo '
         <li><a href="category.php?page=category&id='.$ccid.'">- '.$category.'</a></li>
         ';
        
    }
}


// for all category in Menu
function allsubcategoryonmenu()
{
    include("include/conn.php"); 
    $ret1=mysqli_query($db,"select sc.id,sc.subcategory from subcategory as sc order by id desc limit 0,8 ");
    $count=mysqli_num_rows($ret1);
        while ($row1=mysqli_fetch_array($ret1)) 
        {
            $scid=$row1['id'];
            $scid="PPK".$scid."MrrTT";
            $subcategory=$row1['subcategory'];
            echo'<a href="category.php?page=subcategory&id='.$scid.'">- '.$subcategory.'</a>';
        }
}


// for all category in Menu
function  allsubcategoryonmblemenu()
{
    include("include/conn.php"); 
    $ret1=mysqli_query($db,"select sc.id,sc.subcategory from subcategory as sc order by id desc limit 0,8 ");
    $count=mysqli_num_rows($ret1);
        while ($row1=mysqli_fetch_array($ret1)) 
        {
            $scid=$row1['id'];
            $scid="PPK".$scid."MrrTT";
            $subcategory=$row1['subcategory'];
            echo'<li><a href="category.php?page=subcategory&id='.$scid.'">- '.$subcategory.'</a></li>';
        }
}


// for all category in Menu
function allsellersonmenu()
{
    include("include/conn.php"); 
    $ret1=mysqli_query($db,"select sc.id,sc.f_name,sc.company from seller as sc where sc.status='1' order by id desc limit 0,8 ");
    $count=mysqli_num_rows($ret1);
        while ($row1=mysqli_fetch_array($ret1)) 
        {
            $seid=$row1['id'];
            $seid="PPK".$seid."MrrTT";
            $seller=$row1['f_name'];
            $company=$row1['company'];
            echo'<a href="sellers.php?page=seller&id='.$seid.'">- '.$seller.'</a>';
        }
}


// for all category in Menu
function allsellersonmblemenu()
{
    include("include/conn.php"); 
    $ret1=mysqli_query($db,"select sc.id,sc.f_name,sc.company from seller as sc order by id desc limit 0,8 ");
    $count=mysqli_num_rows($ret1);
        while ($row1=mysqli_fetch_array($ret1)) 
        {
            $seid=$row1['id'];
            $seid="PPK".$seid."MrrTT";
            $seller=$row1['f_name'];
            $company=$row1['company'];
            echo'<li><a href="sellers.php?page=seller&id='.$seid.'">- '.$seller.'</a></li>';
        }
}



// for all category on index page
function allcategory()
{
    include("include/conn.php"); 
    $ret=mysqli_query($db,"select id,categoryName from maincategory order by id Asc ");
    while ($row=mysqli_fetch_array($ret)) 
    {
        $mid=$row['id'];
        $mcid="PPK".$mid."MrrTT";
        $mcategory=$row['categoryName'];
       echo '
         <li><a href="category.php?page=maincategory&id='.$mcid.'" >'.$mcategory.'<i class="fa fa-angle-right"></i></a>
                                    <div class="mega-menu">
                                        <div class="row">';
                    $ret1=mysqli_query($db,"select c.id,c.categoryName from category as c where c.mcid='$mid' limit 0,5 ");$count=mysqli_num_rows($ret1);if(mysqli_num_rows($ret1)>0)
                                                {
                                                    while ($row1=mysqli_fetch_array($ret1)) 
                                                    {    
                                                    $cid=$row1['id'];
                                                    $ccid="PPK".$cid."MrrTT"; 
                                                    $category=$row1['categoryName'];
                    echo'                       
                                                <div class="col-md-2">
                                                <div class="smartphone">
                                                    <h6><a href="category.php?page=category&id='.$ccid.'">'.$category.'</a></h6>
                                                    ';
                                                $ret2=mysqli_query($db,"select sc.id,sc.subcategory from subcategory as sc where sc.categoryid='$cid' limit 0,10 ");
                                                $count=mysqli_num_rows($ret2);
                                                if(mysqli_num_rows($ret2)>0)
                                                {
                                                    while ($row2=mysqli_fetch_array($ret2)) 
                                                    {       $scid=$row2['id'];
                                                            $scid="PPK".$scid."MrrTT";
                                                            $subcategory=$row2['subcategory'];
                                                        
                                                            echo'<a href="category.php?page=subcategory&id='.$scid.'">- '.$subcategory.'</a>';}
                                                }
                                                else
                                                { 
                                                    echo '<a class="text-danger" href="#">
                                                         Sub Category Not Found !!  </a>'; 
                                                }
        echo'
                                                </div>
                                            </div>';
                                                    }
                                                }else
                                                { 
                                                    echo '<a href="#"><h5 class="text-danger">
                                                          Category Not Found !! </h5> </a>'; 
                                                }
                  echo'                      </div>
                                    </div>
                                </li>';
    }
}


// For Best Deals in home page
function bestdeals()
{
    include("include/conn.php"); 
    $date=date('Y-m-d');
    $ret=mysqli_query($db,"select p.*,s.company,c.categoryName,sc.subcategory from products as p inner join seller as s on p.sid=s.id left join category as c on p.category=c.id left join subcategory as sc on p.subcategory=sc.id where `productDeal` != 0 and productStatus=1 ORDER BY rand() DESC limit 4");
    
    echo '<div class="bt-items">';
    while ($row=mysqli_fetch_array($ret)) 
    {
        $id=$row['id'];
        
        $id="PPK".$id."MrrTT";
        $cate=$row['categoryName'];
        $subcate=$row['subcategory'];
        $product=$row['productName'];
        $company=$row['company'];
        $pdate=$row['postingDate'];
        $price=$row['productPrice'];
        $productmoq=$row['productMoq'];
        $fprice=$row['productPriceBeforeDiscount'];
        $description=$row['productDescription'];
        $image1=$row['productImage1'];
        $image2=$row['productImage2'];
        $image3=$row['productImage3'];
        $charges=$row['shippingCharge'];
        $avail=$row['productAvailability'];
         
        echo '
            <div class="bt-box d-flex">
                <div class="bt-img">
                    <a href="product-detail.php?productcode='.$id.'&product='.$product.'"><img src="admin/productimages/'.$product.'/'.$image1.'" alt=""></a>
                </div>
                <div class="bt-content">
                <p><a href="product-detail.php?productcode='.$id.'&product='.$product.'">'.$product.'</a></p>
                    <ul class="list-unstyled list-inline fav">
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                    </ul>
                    <ul class="list-unstyled list-inline price">
                   <li class="list-inline-item"><a href="product-detail.php?productcode='.$id.'&product='.$product.'"><span class="font-weight-bold"> Rs '.$price.'  / PIECE</span> </a></li><br>
                 <li class="list-inline-item text-grey"> <a href="product-detail.php?productcode='.$id.'&product='.$product.'">'.$productmoq.' PIECES (MOQ) </a></li><br>
                     </ul>
                </div>
            </div>';
     
        
        
        
    }
    
    echo' </div> ';
}


// for Hot Offers In home page
function hotoffers()
{
    include("include/conn.php"); 
    $date=date('Y-m-d');
    $ret=mysqli_query($db,"select p.*,s.company,c.categoryName,sc.subcategory from products as p inner join seller as s on p.sid=s.id left join category as c on p.category=c.id left join subcategory as sc on p.subcategory=sc.id where `productOffer` != 0 and productStatus=1 ORDER BY rand() DESC ");
    
    while ($row=mysqli_fetch_array($ret)) 
    {
        $id=$row['id'];
        $percent=rand(2,50);
        $id="PPK".$id."MrrTT";
        $cate=$row['categoryName'];
        $subcate=$row['subcategory'];
        $product=$row['productName'];
        $company=$row['company'];
        $pdate=$row['postingDate'];
        $price=$row['productPrice'];
        $productmoq=$row['productMoq'];
        $fprice=$row['productPriceBeforeDiscount'];
        $description=$row['productDescription'];
        $image1=$row['productImage1'];
        $image2=$row['productImage2'];
        $image3=$row['productImage3'];
        $charges=$row['shippingCharge'];
        $avail=$row['productAvailability'];
       echo '
                                        <div class="ht-item">
                                            <div class="ht-img">
                                                <a href="product-detail.php?productcode='.$id.'&product='.$product.'"><img style=" height:200px;" src="admin/productimages/'.$product.'/'.$image1.'" alt="'.$product.'" class="img-fluid"></a>
                                                <span>- '.$percent.'%</span>
                                                <ul class="list-unstyled list-inline counter-box">
                                                    <li class="list-inline-item">185 <p>Days</p></li>
                                                    <li class="list-inline-item">11 <p>Hrs</p></li>
                                                    <li class="list-inline-item">39 <p>Mins</p></li>
                                                    <li class="list-inline-item">51 <p>Sec</p></li>
                                                </ul>
                                            </div>
                                            <div class="ht-content">
                                                <p><a href="product-detail.php?productcode='.$id.'&product='.$product.'">'.$product.'</a></p>
                                                <ul class="list-unstyled list-inline fav">
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                                <ul class="list-unstyled list-inline price">
                                                <li class="list-inline-item"><a href="product-detail.php?productcode='.$id.'&product='.$product.'"><span class="font-weight-bold"> Rs '.$price.'  / PIECE</span> </a></li><br>
                                                 <li class="list-inline-item text-grey"> <a href="product-detail.php?productcode='.$id.'&product='.$product.'">'.$productmoq.' PIECES (MOQ) </a></li><br>
                                                 </ul>
                                            </div>
                                        </div>';
        
    }
}


// for Feature Products In home page
function featureproducts()
{
    include("include/conn.php"); 
    $date=date('Y-m-d');
    $ret=mysqli_query($db,"select p.*,s.company,c.categoryName,sc.subcategory,mc.categoryName as maincate from products as p inner join seller as s on p.sid=s.id left join category as c on p.category=c.id left join maincategory as mc on mc.id=c.mcid left join subcategory as sc on p.subcategory=sc.id where `productFeature` != 0 and productStatus=1 ORDER BY rand() DESC ");
    
    while ($row=mysqli_fetch_array($ret)) 
    {
        $id=$row['id'];
        
        $id="PPK".$id."MrrTT";
        $maincate=$row['maincate'];
        $cate=$row['categoryName'];
        $subcate=$row['subcategory'];
        $product=$row['productName'];
        $company=$row['company'];
        $pdate=$row['postingDate'];
        $price=$row['productPrice'];
        $productmoq=$row['productMoq'];
        $fprice=$row['productPriceBeforeDiscount'];
        $description=$row['productDescription'];
        $image1=$row['productImage1'];
        $image2=$row['productImage2'];
        $image3=$row['productImage3'];
        $charges=$row['shippingCharge'];
        $avail=$row['productAvailability'];
        echo '
        <div class="tab-item">
        <div class="tab-heading">
        <ul class="list-unstyled list-inline">
        <li class="list-inline-item"><a href="#">'.$maincate.',</a></li>
        <li class="list-inline-item"><a href="#">'.$cate.',</a></li>
        <li class="list-inline-item"><a href="#">'.$subcate.'</a></li>
        </ul>
        <p><a href="product-detail.php?productcode='.$id.'&product='.$product.'">'.$product.'</a></p>
        </div>
        <div class="tab-img">
        <a href="product-detail.php?productcode='.$id.'&product='.$product.'">
        <img class="main-img img-fluid" style=" height:225px;" src="admin/productimages/'.$product.'/'.$image1.'" alt=""> </a>
        <img class="sec-img img-fluid" style=" height:225px;" src="admin/productimages/'.$product.'/'.$image2.'" alt="">
       
        <div class="layer-box">
        </div>
        </div>
        <div class="img-content d-flex justify-content-between">
        <div>
        <ul class="list-unstyled list-inline fav">
        <li class="list-inline-item"><i class="fa fa-star"></i></li>
        <li class="list-inline-item"><i class="fa fa-star"></i></li>
        <li class="list-inline-item"><i class="fa fa-star"></i></li>
        <li class="list-inline-item"><i class="fa fa-star"></i></li>
        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
        </ul>
       <ul class="list-unstyled list-inline price">
       <li class="list-inline-item"> <a href="product-detail.php?productcode='.$id.'&product='.$product.'"><span class="font-weight-bold"> Rs '.$price.'  / PIECE</span> </a></li><br>
       <li class="list-inline-item text-grey"><a href="product-detail.php?productcode='.$id.'&product='.$product.'"> '.$productmoq.' PIECES (MOQ)</a> </li><br>
       </ul>
        </div>
        <div>
       ';
        //<a href="index.php?page=index&action=add&id='.$id.'" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="images/it-cart.png" alt=""></a>
        echo '</div>
        </div>
        </div>     
        ';
        
        
       
    }
}


// for New Products In home page
function newproducts()
{
    include("include/conn.php"); 
    $date=date('Y-m-d');
    $ret=mysqli_query($db,"select p.*,s.company,c.categoryName,sc.subcategory,mc.categoryName as maincate from products as p inner join seller as s on p.sid=s.id left join category as c on p.category=c.id left join maincategory as mc on mc.id=c.mcid left join subcategory as sc on p.subcategory=sc.id where `postingDate` >= DATE_SUB(CURDATE(), INTERVAL 45 DAY) and productStatus=1 ORDER BY p.id DESC limit 8 ");
    
    while ($row=mysqli_fetch_array($ret)) 
    {
        $id=$row['id'];
        
        $id="PPK".$id."MrrTT";
        $maincate=$row['maincate'];
        $cate=$row['categoryName'];
        $subcate=$row['subcategory'];
        $product=$row['productName'];
        $company=$row['company'];
        $pdate=$row['postingDate'];
        $price=$row['productPrice'];
        $productmoq=$row['productMoq'];
        $fprice=$row['productPriceBeforeDiscount'];
        $description=$row['productDescription'];
        $image1=$row['productImage1'];
        $image2=$row['productImage2'];
        $image3=$row['productImage3'];
        $charges=$row['shippingCharge'];
        $avail=$row['productAvailability'];
        echo '
        <div class="new-item">
        <div class="tab-heading">
        <ul class="list-unstyled list-inline">
        <li class="list-inline-item"><a href="#">'.$maincate.',</a></li>
        <li class="list-inline-item"><a href="#">'.$cate.',</a></li>
        <li class="list-inline-item"><a href="#">'.$subcate.'</a></li>
        </ul>
        <p><a href="product-detail.php?productcode='.$id.'&product='.$product.'">'.$product.'</a></p>
        </div>
        <div class="new-img">
        <img class="main-img img-fluid" style=" height:200px;" src="admin/productimages/'.$product.'/'.$image1.'" alt="">
        <img class="sec-img img-fluid" style=" height:200px;" src="admin/productimages/'.$product.'/'.$image2.'" alt="">
        <div class="layer-box">';
       // <a href="#" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="images/it-fav.png" alt=""></a>
     echo  ' </div>
        </div>
        <div class="img-content d-flex justify-content-between">
        <div>
        <ul class="list-unstyled list-inline fav">
        <li class="list-inline-item"><i class="fa fa-star"></i></li>
        <li class="list-inline-item"><i class="fa fa-star"></i></li>
        <li class="list-inline-item"><i class="fa fa-star"></i></li>
        <li class="list-inline-item"><i class="fa fa-star"></i></li>
        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
        </ul>
        <ul class="list-unstyled list-inline price">
        <li class="list-inline-item"><a href="product-detail.php?productcode='.$id.'&product='.$product.'"><span class="font-weight-bold"> Rs '.$price.'  / PIECE</span> </a></li><br>
        <li class="list-inline-item text-grey"><a href="product-detail.php?productcode='.$id.'&product='.$product.'"> '.$productmoq.' PIECES (MOQ)</a> </li><br>
        </ul>
        </div>
        <div>
               ';
        //<a href="index.php?page=index&action=add&id='.$id.'" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="images/it-cart.png" alt=""></a>
        echo '</div>
        </div>
        </div>     
        ';
        
    }
}


// For Most sales Products in home page
function mostsales()
{
    include("include/conn.php"); 
    $date=date('Y-m-d');
    $ret=mysqli_query($db,"select o.productId,p.*,c.categoryName,sc.subcategory ,sum(o.quantity) as quantity from products as p inner JOIN orders as o on o.productId=p.id left join category as c on c.id=p.category left join subcategory as sc on p.subcategory=sc.id where productStatus=1 group by p.productName Order by sum(o.quantity) , rand() desc limit 4");
    
    echo '<div class="rt-items">';
    while ($row=mysqli_fetch_array($ret)) 
    {
        $id=$row['id'];
        
        $id="PPK".$id."MrrTT";
        $cate=$row['categoryName'];
        $subcate=$row['subcategory'];
        $product=$row['productName'];
        //$company=$row['company'];
        $pdate=$row['postingDate'];
        $price=$row['productPrice'];
        $productmoq=$row['productMoq'];
        $fprice=$row['productPriceBeforeDiscount'];
        $description=$row['productDescription'];
        $image1=$row['productImage1'];
        $image2=$row['productImage2'];
        $image3=$row['productImage3'];
        $charges=$row['shippingCharge'];
        $avail=$row['productAvailability'];
         
        echo '
            <div class="rt-box d-flex">
                <div class="rt-img">
                    <a href="product-detail.php?productcode='.$id.'&product='.$product.'"><img src="admin/productimages/'.$product.'/'.$image1.'" alt=""></a>
                </div>
                <div class="rt-content">
                <p><a href="product-detail.php?productcode='.$id.'&product='.$product.'">'.$product.'</a></p>
                    <ul class="list-unstyled list-inline fav">
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                    </ul>
                     <ul class="list-unstyled list-inline price">
                     <li class="list-inline-item"><a href="product-detail.php?productcode='.$id.'&product='.$product.'"><span class="font-weight-bold"> Rs '.$price.'  / PIECE</span> </a></li><br>
                     <li class="list-inline-item text-grey"> <a href="product-detail.php?productcode='.$id.'&product='.$product.'">'.$productmoq.' PIECES (MOQ) </a></li><br>
                     </ul>
                </div>
            </div>';
     
        
        
        
    }
    
    echo' </div> ';
}


//To GEt image banner one on home page
function bannerimage1()
{
    include("include/conn.php");
    $ret=mysqli_query($db,"select image1 from ads where id='1'");
    $row=mysqli_fetch_array($ret);
        $image=$row['image1'];

    echo'
    
    <img style="width:950px;height:200px;"  src="admin/productimages/bannersad/'.$image.'" alt="" class="img-fluid">
    ';
    
    
}
    
//To GEt image banner two on home page
function bannerimage2()
{
    include("include/conn.php");
    $ret=mysqli_query($db,"select image2 from ads where id='1'");
    $row=mysqli_fetch_array($ret);
        $image=$row['image2'];

    echo'
    
    <img style="width:950px;height:200px;" src="admin/productimages/bannersad/'.$image.'" alt="" class="img-fluid">
    ';
    
    
}
    


// For all Products in home page
function allproducts()
{
    include("include/conn.php"); 
    $date=date('Y-m-d');
    $ret=mysqli_query($db,"select p.*,s.company,c.categoryName,sc.subcategory from products as p inner join seller as s on p.sid=s.id left join category as c on p.category=c.id left join subcategory as sc on p.subcategory=sc.id where productStatus=1 ORDER BY rand() DESC limit 4");
    
    echo ' <div class="slr-items">';
    while ($row=mysqli_fetch_array($ret)) 
    {
        $id=$row['id'];
        
        $id="PPK".$id."MrrTT";
        $cate=$row['categoryName'];
        $subcate=$row['subcategory'];
        $product=$row['productName'];
        $company=$row['company'];
        $pdate=$row['postingDate'];
        $price=$row['productPrice'];
        $productmoq=$row['productMoq'];
        $fprice=$row['productPriceBeforeDiscount'];
        $description=$row['productDescription'];
        $image1=$row['productImage1'];
        $image2=$row['productImage2'];
        $image3=$row['productImage3'];
        $charges=$row['shippingCharge'];
        $avail=$row['productAvailability'];
         
     echo '
                            <div class="slr-box d-flex">
                                                <div class="slr-img">
                                                    <a href="product-detail.php?productcode='.$id.'&product='.$product.'"><img src="admin/productimages/'.$product.'/'.$image1.'" alt=""></a>
                                                </div>
                                                <div class="slr-content">
                                                    <p><a href="product-detail.php?productcode='.$id.'&product='.$product.'">'.$product.'</a></p>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                            <li class="list-inline-item"><a href="product-detail.php?productcode='.$id.'&product='.$product.'"><span class="font-weight-bold"> Rs '.$price.'  / PIECE</span> </a></li><br>
                                                        <li class="list-inline-item text-grey"> <a href="product-detail.php?productcode='.$id.'&product='.$product.'">'.$productmoq.' PIECES (MOQ) </a></li><br>
                                                        </ul>
                                                </div>
                                            </div>
     
     ';
        
        
        
    }
    echo '
    </div>';
    
}


//To GEt product detail on product detail page
function productdetail($productcode)
{
    include("include/conn.php");
    $ret=mysqli_query($db,"select p.*,s.company,s.f_name,p.category as cid,c.categoryName,sc.subcategory, mc.categoryName as maincate, COUNT(r.id) as reviews from products as p inner join seller as s on p.sid=s.id left join category as c on c.id=p.category left join maincategory as mc on mc.id=c.mcid  left join subcategory as sc on p.subcategory=sc.id left join productreviews as r on p.id=r.productId where p.id='$productcode'");
    $row=mysqli_fetch_array($ret);
        $id=$row['id'];
        $id="PPK".$id."MrrTT";
        $cid=$row['cid'];
        $maincate=$row['maincate'];
        $category=$row['categoryName'];
        $subcategory=$row['subcategory'];
        $product=$row['productName'];
        $company=$row['company'];
        $sellername=$row['f_name'];
        $reviews=$row['reviews'];
        $pdate=$row['postingDate'];
        $price=$row['productPrice'];
        $productmoq=$row['productMoq'];
        $fprice=$row['productPriceBeforeDiscount'];
        $description=$row['productDescription'];
     $image1=$row['productImage1'];
        $image2=$row['productImage2'];
        $image3=$row['productImage3'];
        $charges=$row['shippingCharge'];
        $avail=$row['productAvailability'];
        
    echo '

                            <div class="col-md-5">
                                <div class="sg-img">
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="sg1" role="tabpanel">
                                            <img  style=" height:350px; width:auto;"  src="admin/productimages/'.$product.'/'.$image1.'" alt="" class="img-fluid">
                                        </div>
                                        <div class="tab-pane" id="sg2" role="tabpanel">
                                            <img style=" height:350px; width:auto;"   src="admin/productimages/'.$product.'/'.$image2.'" alt="" class="img-fluid">
                                        </div>
                                        <div class="tab-pane" id="sg3" role="tabpanel">
                                            <img style=" height:350px; width:auto;"   src="admin/productimages/'.$product.'/'.$image3.'" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="nav d-flex justify-content-between">
                                        <a class="nav-item nav-link active" data-toggle="tab" href="#sg1"><img src="admin/productimages/'.$product.'/'.$image1.'" alt=""></a>
                                        <a class="nav-item nav-link" data-toggle="tab" href="#sg2"><img src="admin/productimages/'.$product.'/'.$image2.'" alt=""></a>
                                        <a class="nav-item nav-link" data-toggle="tab" href="#sg3"><img src="admin/productimages/'.$product.'/'.$image3.'" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="sg-content">
                                    <div class="pro-tag">
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item"><a href="#">'.$maincate.' , </a></li>
                                            <li class="list-inline-item"><a href="#">'.$category.' , </a></li>
                                            <li class="list-inline-item"><a href="#">'.$subcategory.'</a></li>
                                        </ul>
                                    </div>
                                     <div class="pro-name">
                                         <p>'.$product.'</p>
                                     </div>
                                     <div class="pro-rating">
                                         <ul class="list-unstyled list-inline">
                                             <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                             <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                             <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                             <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                             <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                             <li class="list-inline-item"><a href="#">( '.$reviews.' Review )</a></li>
                                         </ul>
                                     </div>
                                     <div class="pro-price">
                                         <ul class="list-unstyled list-inline price">
                                                        <li class="list-inline-item"><span class="font-weight-bold"> Rs '.$price.'  / PIECE</span></li><br>
                                                        <li class="list-inline-item text-grey"> '.$productmoq.' PIECES (MOQ) </li><br>
                                         </ul>
                                         <p>Availability : <span>'.$avail.'</span> </p>
                                     </div>
                                     
                                     <div class="colo-siz">
                                         <div class="color">
                                             <ul class="list-unstyled list-inline">
                                                 <li>Color :</li>
                                                 <li class="list-inline-item">
                                                     <input type="radio" id="color-1" name="color" value="color-blue">
                                                     <label for="color-1"><span><i class="fa fa-check"></i></span></label>
                                                 </li>
                                                 <li class="list-inline-item">
                                                     <input type="radio" id="color-2" name="color" value="color-red">
                                                     <label for="color-2"><span><i class="fa fa-check"></i></span></label>
                                                 </li>
                                                 <li class="list-inline-item">
                                                     <input type="radio" id="color-3" name="color" value="color-yellow">
                                                     <label for="color-3"><span><i class="fa fa-check"></i></span></label>
                                                 </li>
                                                 <li class="list-inline-item">
                                                     <input type="radio" id="color-4" name="color" value="color-green">
                                                     <label for="color-4"><span><i class="fa fa-check"></i></span></label>
                                                 </li>
                                                 <li class="list-inline-item">
                                                     <input type="radio" id="color-5" name="color" value="color-black">
                                                     <label for="color-5"><span><i class="fa fa-check"></i></span></label>
                                                 </li>
                                             </ul>
                                         </div>
                                         <div class="size">
                                             <ul class="list-unstyled list-inline">
                                                 <li>Size :</li>
                                                 <li class="list-inline-item">
                                                     <input type="radio" id="size-1" name="size" value="size-small">
                                                     <label for="size-1">S</label>
                                                 </li>
                                                 <li class="list-inline-item">
                                                     <input type="radio" id="size-2" name="size" value="size-medium">
                                                     <label for="size-2">M</label>
                                                 </li>
                                                 <li class="list-inline-item">
                                                     <input type="radio" id="size-3" name="size" value="size-large">
                                                     <label for="size-3">L</label>
                                                 </li>
                                             </ul>
                                         </div>';
                                         if(!isset($_SESSION['uid']))
                                        { 
                                             echo ' <div class="pro-btns">
                                              <a href="login.php" class="cart">Login To Send Enquiry </a>
                                              
                                         </div>'; 
                                      
                                         }else{
                                             
                                          echo ' <div class="pro-btns">
                                              <a href="#" data-toggle="modal" data-target="#modalEnquiryForm" class="cart">Send Enquiry</a>
                                              
                                         </div>';
                                             
                                         }
                                         
                            echo   '    </div>
                                </div>
                            </div>    
    
    
    
                            <div class="col-md-12">
                                <div class="sg-tab">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#pro-det">Product Details</a></li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#rev">Reviews ('.$reviews.')</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="pro-det" role="tabpanel">
                                            <p>'.$description.'</p>
                                        </div>
                                        <div class="tab-pane fade" id="rev" role="tabpanel">
                                        
                                        ';
                                    
                                        $qry=mysqli_query($db,"select * from productreviews where productId='$productcode' ORDER BY `productreviews`.`id` ASC");
                                        while($rvw=mysqli_fetch_array($qry))
                                        {
                                        $timestamp = strtotime($rvw['reviewDate']);
                                        list($date, $time) = explode('|', date('d-M-Y|Gi.s',$timestamp ));
								echo' 
                                            <div class="review-box d-flex">
                                                <div class="rv-content">
                                                    <h6>'.htmlentities($rvw['name']).'<span>
                                                    '.$date.'</span></h6>
                                                    <ul class="list-unstyled list-inline">';
                                                        for($i=1;$i<=$rvw['quality'];$i++)
                                                        {		
                                                        
                                                     
                                                       echo'  <li class="list-inline-item"><i class="fa fa-star"></i></li>';
                                                        }
                                                       
                                                echo    '</ul>
                                                    <p>'.htmlentities($rvw['review']).'</p>
                                                </div>
                                            </div>
                                            ';
                                        }
    
								echo'	
                                            
                                            <div class="review-form">
                                                <h6>Add Your Review</h6>
                                                <form  method="post">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="star-rating">
                                                                <label>Your Rating*</label>
                                                                <span class="fa fa-star-o" data-rating="1"></span>
                                                                <span class="fa fa-star-o" data-rating="2"></span>
                                                                <span class="fa fa-star-o" data-rating="3"></span>
                                                                <span class="fa fa-star-o" data-rating="4"></span>
                                                                <span class="fa fa-star-o" data-rating="5"></span>
                                                                <input type="hidden" name="star" class="rating-value" required>
                                                              
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">  
                                                        <input type="hidden" name="pid" value="'.$row['id'].'">
                                                            <label>Your Name*</label>
                                                <input type="text" name="name" value="';if(isset($_SESSION['username'])){ echo $_SESSION['username'];}else{"";} echo'" required="">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label>Your Email*</label>
                                                <input type="text" name="email" value="';if(isset($_SESSION['login'])){ echo $_SESSION['login'];}else{"";} echo'" required="">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label>Your Review*</label>
                                                            <textarea name="review" required=""></textarea>
                                                            ';
                                         if(!isset($_SESSION['uid']))
                                        { 
                                             echo ' <div class="pro-btns">
                                             
                                              <a  href="login.php" class=" btn btn-danger cart">Login To Add Review </a>
                                              
                                         </div>'; 
                                      
                                         }else{
                                             
                                          echo ' <div class="pro-btns">
                                          <button type="submit" name="submit">Add Review</button> 
                                          </div>';
                                             
                                         }
                                        echo'  
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
    
    
<div class="modal fade" id="modalEnquiryForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div style="margin-top:100px" class="modal-content">
        <form method="post" id="rfq-form" action="sendinquiry.php">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Contact Supplier</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
         <div class="col-xs-12 col-sm-12 col-md-12 left-container">
                        <div class="inline-blocks">
                            <div class="left-container">
                                
                                <img src="admin/productimages/'.$product.'/'.$image1.'" alt="'.$product.'">
                            </div>
                            <div class="right-container">
                                <h4 class="c-heading heading-rfq">'.$product.'</h4>
                                <h6 class="sub-heading">'.$sellername.'</h6>
                             
                                
                            </div>
                        </div>
            </div>
          <div class="col-xs-12 col-sm-12 col-md-12 left-container">


                        <div class="form-container">


                                <div class="form-group">
                                    <input class="form-control p-track" placeholder="Enter title *" id="subject" name="subject" type="text" value="'.$product.'" required>
                                    <input  name="pid" type="hidden" value="'.$row['id'].'" required>
                                    <input  name="pcode" type="hidden" value="'.$id.'" required>
                                    <input  name="pname" type="hidden" value="'.$product.'" required>
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control rfq-txt p-track" id="inquiry_message" name="message" cols="50" rows="10" placeholder="Enter Message Here" required></textarea>
                                </div>

                                                                <div class="clearfix"></div>
                            
                    <h4 class="c-heading heading-rfq" style="margin-bottom: 15px;">Provide your contact details</h4>
                    <div class="form-group l-r-l-forms" style="margin-bottom: 40px">
                                    <div class="col-xs-12 col-sm-4 ">
                                        <input class="form-control p-track" placeholder="Enter Full Name *" id="full_name" name="name" type="text"  value="';if(isset($_SESSION['username'])){ echo $_SESSION['username'];
                                        }
                            echo '"  required>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 ">
                                        <input class="form-control p-track" placeholder="Enter Email *" id="user_email" name="email" value="';if(isset($_SESSION['login'])){ echo $_SESSION['login'];
                                        }
                                            
                                        echo '" type="email" required>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 ">
                                        <input class="form-control p-track" type="text" pattern="^\d{4}-\d{3}-\d{4}$" onKeyPress="if(this.value.length==13) return false;"  name="contactno" placeholder="Enter contact number" required value="';if(isset($_SESSION['contactno'])){ echo $_SESSION['contactno'];
                                        }
                                        echo '"  >
                                        <small>(format: xxxx-xxx-xxxx):</small>
                                    </div>
                            </div>
                    
              </div>
          </div>
        <button type="submit" class="btn btn-post-rfq" name="sendinquiry">Send Inquiry</button>

      </div>
        </form>
    </div>
  </div>
</div>
    
    ';
    
    
    
}
    

//To GEt product detail on product detail page
function sellerdetail($productcode)
{
    include("include/conn.php");
    $ret=mysqli_query($db,"select s.image,s.company,s.f_name,s.email from products as p inner join seller as s on p.sid=s.id where p.id='$productcode'");
    $row=mysqli_fetch_array($ret);
        $company=$row['company'];
        $sellername=$row['f_name'];
        $email=$row['email'];
        $image=$row['image'];

    echo'
    
    <div class="card1">
  <img src="seller/images/seller image/'.$email.'/'.$image.'" alt="Seller" >
  <h3>'.$sellername.'</h3>
  <div class="pro-rating">
  <ul style="text-align:center" class="list-unstyled list-inline">
    <li class="list-inline-item"><strong>3.9</strong>/5</li>
    <li class="list-inline-item"><i class="fa fa-star"></i></li>
    <li class="list-inline-item"><i class="fa fa-star"></i></li>
    <li class="list-inline-item"><i class="fa fa-star"></i></li>
    <li class="list-inline-item"><i class="fa fa-star"></i></li>
    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
  </ul>
  </div>
  <p class="title">Company : '.$company.'</p>
  <p class="title">Status : Active</p>
  <p >Trusted : <i class="fa fa-check"></i></p>
  <p >Manufacturer : <i class="fa fa-check"></i></p>
  <p >Member ship : Free </p>
  <div style="
    margin: 15px 0px 23px 0px;
    padding-bottom: 15px;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
</div>
    ';
    
    
}
    

//To GEt product detail on product detail page
function sliderimage()
{
    include("include/conn.php");
    $ret=mysqli_query($db,"select * from slider where sl_id='1' ");
    $row=mysqli_fetch_array($ret);
        $heading1=$row['sl_heading1'];
        $heading2=$row['sl_heading2'];
        $subheading1=$row['sl_subheading1'];
        $subheading2=$row['sl_subheading2'];
        $smheading1=$row['sl_smheading1'];
        $smheading2=$row['sl_smheading2'];
        $image1=$row['sl_image1'];
        $image2=$row['sl_image2'];

    echo'
    <div class="slider-item slider-item1">
                                <img src="admin/productimages/slidersimage/'.$image1.'" alt="" class="img1 wow fadeInRight effect"  data-wow-duration="1s" data-wow-delay="0s">
                                <div class="slider-box">
                                    <div class="slider-table">
                                        <div class="slider-tablecell">
                                            <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.5s">
                                                <h5>'.$smheading1.'</h5>
                                            </div>
                                            <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.6s">
                                                <h2>'.$heading1.'</h2>
                                            </div>
                                            <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.7s">
                                                 <p>'.$subheading1.'</p>
                                            </div>
                                            <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.8s">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
    <div class="slider-item slider-item2">
                                <img src="admin/productimages/slidersimage/'.$image2.'" alt="" class="img2 wow fadeInRight effect"  data-wow-duration="1s" data-wow-delay="0s">
                                <div class="slider-box">
                                    <div class="slider-table">
                                        <div class="slider-tablecell text-right">
                                            <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.5s">
                                            <h5>'.$smheading2.'</h5>
                                            </div>
                                            <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.6s">
                                                <h2>'.$heading2.'</h2>
                                            </div>
                                            <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.7s">
                                                <p>'.$subheading2.'</p>
                                            </div>
                                            <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.8s">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    ';
    
    //<a href="#">Shop Now</a>
}
    

// for similar Products In product detail page
function similarproducts($productcode)
{
    include("include/conn.php"); 
    $date=date('Y-m-d');
    $re=mysqli_query($db,"select mc.id from products as p left join category as c on p.category=c.id left join maincategory as mc on c.mcid=mc.id where p.id='$productcode'");
    $row1=mysqli_fetch_array($re);
    $category=$row1['id'];
    
    $ret=mysqli_query($db,"select p.*,s.company,c.categoryName,sc.subcategory from products as p inner join seller as s on p.sid=s.id left join category as c on p.category=c.id left join subcategory as sc on p.subcategory=sc.id where productStatus=1 and c.mcid='$category' ORDER BY rand() DESC ");
    
    while ($row=mysqli_fetch_array($ret)) 
    {
        $id=$row['id'];
        
        $id="PPK".$id."MrrTT";
        $cate=$row['categoryName'];
        $subcate=$row['subcategory'];
        $product=$row['productName'];
        $company=$row['company'];
        $pdate=$row['postingDate'];
        $price=$row['productPrice'];
        $productmoq=$row['productMoq'];
        $fprice=$row['productPriceBeforeDiscount'];
        $description=$row['productDescription'];
        $image1=$row['productImage1'];
        $image2=$row['productImage2'];
        $image3=$row['productImage3'];
        $charges=$row['shippingCharge'];
        $avail=$row['productAvailability'];
        
        echo '
        
                                        <div class="sim-item">
                                            <div class="sim-img">
                                                <img class="main-img img-fluid" style="height:150px" src="admin/productimages/'.$product.'/'.$image1.'" alt="">
                                                <img class="sec-img img-fluid" style="height:150px"
                                                src="admin/productimages/'.$product.'/'.$image2.'" alt="">
                                                <div class="layer-box">
                                                 
                                                </div>
                                            </div>
                                            <div class="sim-heading">
                                                <p><a href="product-detail.php?productcode='.$id.'&product='.$product.'">'.$product.'</a></p>
                                            </div>
                                            <div class="img-content d-flex justify-content-between">
                                                <div>
                                                    <ul class="list-unstyled list-inline fav">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="list-unstyled list-inline price">
                                                   <li class="list-inline-item"><a href="product-detail.php?productcode='.$id.'&product='.$product.'"><span class="font-weight-bold"> Rs '.$price.'  / PIECE</span> </a></li><br>
                                                    <li class="list-inline-item text-grey"> <a href="product-detail.php?productcode='.$id.'&product='.$product.'">'.$productmoq.' PIECES (MOQ) </a></li><br>
                                                        </ul>
                                                </div>
                                                <div>
                                                  
                                                </div>
                                            </div>
                                        </div>
        
        
        ';
        
        
        
    }
}


// for all category on product detail page
function categorylist()
{
    include("include/conn.php"); 
    $ret=mysqli_query($db,"select id,categoryName from category");
    while ($row=mysqli_fetch_array($ret)) 
    {
        $cid=$row['id'];
        $ccid="PPK".$cid."MrrTT";
        $category=$row['categoryName'];
            echo '
            <div class="card-header">
            <a href="category.php?page=category&id='.$ccid.'" data-toggle="collapse" data-target="#collapse'.$cid.'">
            <span>'.$category.'</span>
            <i class="fa fa-angle-down"></i>
            </a>
            </div>
            <div id="collapse'.$cid.'" class="collapse">
            <div class="card-body">
            <ul class="list-unstyled">
            ';
        $ret1=mysqli_query($db,"select sc.id,sc.subcategory from subcategory as sc where sc.categoryid='$cid' limit 0,10 ");
        $count=mysqli_num_rows($ret1);
        if(mysqli_num_rows($ret1)>0)
        {
            while ($row1=mysqli_fetch_array($ret1)) 
            {
                $scid=$row1['id'];
                $scid="PPK".$scid."MrrTT";
                $subcategory=$row1['subcategory'];
                echo '
                <li><a href="category.php?page=subcategory&id='.$scid.'"><i class="fa fa-angle-right"></i> '.$subcategory.'</a></li>
                ';
            }
        }
        else
        { 
            echo '
            <li><a href="#"><h5 class="text-danger">
            Sub Category Not Found !! </h5> </a></li>';
        }
        
          echo'
          </ul>
          </div>
          </div>';
        
        
    }
}


// for all Products of Main category In category page
function productmainCategory($category, $offset,$no_of_records_per_page,$pageno)
{
    include("include/conn.php"); 
    $result=mysqli_query($db,"select p.*,s.company,c.categoryName,sc.subcategory from products as p inner join seller as s on p.sid=s.id left join category as c on p.category=c.id left join subcategory as sc on p.subcategory=sc.id where  productStatus=1 and c.mcid='$category' ORDER BY p.id DESC");
    $count=mysqli_num_rows($result);
   //echo $total_rows = mysqli_fetch_array($result)[0];
    $total_pages = ceil($count / $no_of_records_per_page);
    $ret=mysqli_query($db,"select p.*,c.id as cid,s.company,c.categoryName,sc.subcategory from products as p inner join seller as s on p.sid=s.id left join category as c on p.category=c.id left join subcategory as sc on p.subcategory=sc.id where  productStatus=1 and c.mcid='$category' ORDER BY p.id DESC LIMIT $offset, $no_of_records_per_page");
    $num=mysqli_num_rows($ret);
    if($num>0)
    {
    while ($row=mysqli_fetch_array($ret)) 
    {
        $id=$row['id'];
        $id="PPK".$id."MrrTT";
        $cid=$row['cid'];
        $cid="PPK".$cid."MrrTT";
        $cate=$row['categoryName'];
        $subcate=$row['subcategory'];
        $product=$row['productName'];
        $company=$row['company'];
        $pdate=$row['postingDate'];
        $price=$row['productPrice'];
        $productmoq=$row['productMoq'];
        $fprice=$row['productPriceBeforeDiscount'];
        $description=$row['productDescription'];
        $image1=$row['productImage1'];
        $image2=$row['productImage2'];
        $image3=$row['productImage3'];
        $charges=$row['shippingCharge'];
        $avail=$row['productAvailability'];
        echo '
                            <div class="tab-item2">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-12">
                                                        <div class="tab-img">
                                                            <img class="main-img img-fluid" style="height:250px;width: 400px;" src="admin/productimages/'.$product.'/'.$image1.'" alt="">
                                                            <img class="sec-img img-fluid" style="height:250px;width: 400px;" src="admin/productimages/'.$product.'/'.$image2.'" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-12">
                                                        <div class="item-heading d-flex justify-content-between">
                                                            <div class="item-top">
                                                                <ul class="list-unstyled list-inline cate">
                                                                    <li class="list-inline-item"><a href="#">'.$cate.',</a></li>
                                                                    <li class="list-inline-item"><a href="#">'.$subcate.'</a></li>
                                                                </ul>
                                                                <p><a href="product-detail.php?productcode='.$id.'&product='.$product.'">'.$product.'</a></p>
                                                                <ul class="list-unstyled list-inline fav">
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="item-price">
                                                                <ul class="list-unstyled list-inline price">
                                                               <li class="list-inline-item"> 
                                                               <a href="product-detail.php?productcode='.$id.'&product='.$product.'"><span class="font-weight-bold"> Rs '.$price.'  / PIECE</span> </a></li><br>
                                                               <li class="list-inline-item text-grey">
                                                               <a href="product-detail.php?productcode='.$id.'&product='.$product.'"> '.$productmoq.' PIECES (MOQ)</a> </li><br>
                                                               </ul>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <p>'.$description.'</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
        ';
        
        
    }
    echo ' 
                                    </div>
                                </div>
                                 </div>
                                 
                    <div class="pagination-box text-center">
                    <ul class="list-unstyled list-inline">
                    <li class="list-inline-item"><a href="category.php?page=category&id='.$cid.'&pageno=1">First</a></li>
                    <li class="list-inline-item  '.(($pageno <= 1)? "disabled":"" ).' "> 
                    <a href="category.php?page=category&id='.$cid.''.(($pageno <= 1)? "#" :"&pageno=".($pageno - 1) ).' ">Prev</a></li>';
                         for($i=1;$i<=$total_pages;$i++)
                                    {  
                             $active="";
                             if($pageno==$i)
                             {
                                 $active="active";
                             }
                echo '<li class="list-inline-item '.$active.'"> <a href="category.php?page=category&id='.$cid.'&pageno='.$i.'" >'.$i.'
                                        </a>
                                    </li>';
                                    
                              } 
             echo'     <li class="list-inline-item '.(($pageno >= $total_pages) ? "disabled": "").'">
                    <a href="category.php?page=category&id='.$cid.''.(($pageno >= $total_pages)? "#":"&pageno=".($pageno + 1) ).'">Next</a>
                    </li>
                    <li class="list-inline-item"><a href="category.php?page=category&id='.$cid.'&pageno='.$total_pages.'">Last</a></li>
                    
                    </ul>
                    </div>
                    ';
    }
    else{
        
        echo "<h2 class='text-center'><a class='text-center text-danger font-weight-bolder'>No Product Found !!</a></h2>";
    }
}

// for all Products In category page
function productCategory($category, $offset,$no_of_records_per_page,$pageno)
{
    include("include/conn.php"); 
    $result=mysqli_query($db,"select p.*,s.company,c.categoryName,sc.subcategory from products as p inner join seller as s on p.sid=s.id left join category as c on p.category=c.id left join subcategory as sc on p.subcategory=sc.id where  productStatus=1 and p.category='$category' ORDER BY p.id DESC");
    $count=mysqli_num_rows($result);
   //echo $total_rows = mysqli_fetch_array($result)[0];
    $total_pages = ceil($count / $no_of_records_per_page);
    $ret=mysqli_query($db,"select p.*,c.id as cid,s.company,c.categoryName,sc.subcategory from products as p inner join seller as s on p.sid=s.id left join category as c on p.category=c.id left join subcategory as sc on p.subcategory=sc.id where  productStatus=1 and p.category='$category' ORDER BY p.id DESC LIMIT $offset, $no_of_records_per_page");
    $num=mysqli_num_rows($ret);
    if($num>0)
    {
    while ($row=mysqli_fetch_array($ret)) 
    {
        $id=$row['id'];
        $id="PPK".$id."MrrTT";
        $cid=$row['cid'];
        $cid="PPK".$cid."MrrTT";
        $cate=$row['categoryName'];
        $subcate=$row['subcategory'];
        $product=$row['productName'];
        $company=$row['company'];
        $pdate=$row['postingDate'];
        $price=$row['productPrice'];
        $productmoq=$row['productMoq'];
        $fprice=$row['productPriceBeforeDiscount'];
        $description=$row['productDescription'];
        $image1=$row['productImage1'];
        $image2=$row['productImage2'];
        $image3=$row['productImage3'];
        $charges=$row['shippingCharge'];
        $avail=$row['productAvailability'];
        echo '
                            <div class="tab-item2">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-12">
                                                        <div class="tab-img">
                                                            <img class="main-img img-fluid" style="height:250px;width: 400px;" src="admin/productimages/'.$product.'/'.$image1.'" alt="">
                                                            <img class="sec-img img-fluid" style="height:250px;width: 400px;" src="admin/productimages/'.$product.'/'.$image2.'" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-12">
                                                        <div class="item-heading d-flex justify-content-between">
                                                            <div class="item-top">
                                                                <ul class="list-unstyled list-inline cate">
                                                                    <li class="list-inline-item"><a href="#">'.$cate.',</a></li>
                                                                    <li class="list-inline-item"><a href="#">'.$subcate.'</a></li>
                                                                </ul>
                                                                <p><a href="product-detail.php?productcode='.$id.'&product='.$product.'">'.$product.'</a></p>
                                                                <ul class="list-unstyled list-inline fav">
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="item-price">
                                                                <ul class="list-unstyled list-inline price">
                                                               <li class="list-inline-item"> 
                                                               <a href="product-detail.php?productcode='.$id.'&product='.$product.'"><span class="font-weight-bold"> Rs '.$price.'  / PIECE</span> </a></li><br>
                                                               <li class="list-inline-item text-grey">
                                                               <a href="product-detail.php?productcode='.$id.'&product='.$product.'"> '.$productmoq.' PIECES (MOQ)</a> </li><br>
                                                               </ul>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <p>'.$description.'</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
        ';
        
        
    }
    echo ' 
                                    </div>
                                </div>
                                 </div>
                                 
                    <div class="pagination-box text-center">
                    <ul class="list-unstyled list-inline">
                    <li class="list-inline-item"><a href="category.php?page=category&id='.$cid.'&pageno=1">First</a></li>
                    <li class="list-inline-item  '.(($pageno <= 1)? "disabled":"" ).' "> 
                    <a href="category.php?page=category&id='.$cid.''.(($pageno <= 1)? "#" :"&pageno=".($pageno - 1) ).' ">Prev</a></li>';
                         for($i=1;$i<=$total_pages;$i++)
                                    {  
                             $active="";
                             if($pageno==$i)
                             {
                                 $active="active";
                             }
                echo '<li class="list-inline-item '.$active.'"> <a href="category.php?page=category&id='.$cid.'&pageno='.$i.'" >'.$i.'
                                        </a>
                                    </li>';
                                    
                              } 
             echo'     <li class="list-inline-item '.(($pageno >= $total_pages) ? "disabled": "").'">
                    <a href="category.php?page=category&id='.$cid.''.(($pageno >= $total_pages)? "#":"&pageno=".($pageno + 1) ).'">Next</a>
                    </li>
                    <li class="list-inline-item"><a href="category.php?page=category&id='.$cid.'&pageno='.$total_pages.'">Last</a></li>
                    
                    </ul>
                    </div>
                    ';
    }
    else{
        
        echo "<h2 class='text-center'><a class='text-center text-danger font-weight-bolder'>No Product Found !!</a></h2>";
    }
}


// for all Products In category page
function productSubcategory($category, $offset,$no_of_records_per_page,$pageno)
{
    include("include/conn.php"); 
     $result=mysqli_query($db,"select p.*,s.company,c.categoryName,sc.subcategory from products as p inner join seller as s on p.sid=s.id left join category as c on p.category=c.id left join subcategory as sc on p.subcategory=sc.id where productStatus=1 and p.subcategory='$category' ORDER BY p.id DESC ");
    $count=mysqli_num_rows($result);
   //echo $total_rows = mysqli_fetch_array($result)[0];
    $total_pages = ceil($count / $no_of_records_per_page);
    $ret=mysqli_query($db,"select p.*,sc.id as cid,s.company,c.categoryName,sc.subcategory from products as p inner join seller as s on p.sid=s.id left join category as c on p.category=c.id left join subcategory as sc on p.subcategory=sc.id where productStatus=1 and p.subcategory='$category' ORDER BY p.id DESC LIMIT $offset, $no_of_records_per_page ");
$num=mysqli_num_rows($ret);
    if($num>0)
    {    
    while ($row=mysqli_fetch_array($ret)) 
    {
        $id=$row['id'];
        $id="PPK".$id."MrrTT";
        $cid=$row['cid'];
        $cid="PPK".$cid."MrrTT";
        $cate=$row['categoryName'];
        $subcate=$row['subcategory'];
        $product=$row['productName'];
        $company=$row['company'];
        $pdate=$row['postingDate'];
        $price=$row['productPrice'];
        $productmoq=$row['productMoq'];
        $fprice=$row['productPriceBeforeDiscount'];
        $description=$row['productDescription'];
        $image1=$row['productImage1'];
        $image2=$row['productImage2'];
        $image3=$row['productImage3'];
        $charges=$row['shippingCharge'];
        $avail=$row['productAvailability'];
   echo '
        
                                            <div class="tab-item2">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-12">
                                                        <div class="tab-img">
                                                            <img class="main-img img-fluid" style="height:250px;width: 400px;" src="admin/productimages/'.$product.'/'.$image1.'" alt="">
                                                            <img class="sec-img img-fluid" style="height:250px;width: 400px;" src="admin/productimages/'.$product.'/'.$image2.'" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-12">
                                                        <div class="item-heading d-flex justify-content-between">
                                                            <div class="item-top">
                                                                <ul class="list-unstyled list-inline cate">
                                                                    <li class="list-inline-item"><a href="#">'.$cate.',</a></li>
                                                                    <li class="list-inline-item"><a href="#">'.$subcate.'</a></li>
                                                                </ul>
                                                                <p><a href="product-detail.php?productcode='.$id.'&product='.$product.'">'.$product.'</a></p>
                                                                <ul class="list-unstyled list-inline fav">
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="item-price">
                                                                <ul class="list-unstyled list-inline price">
                                                               <li class="list-inline-item"> 
                                                               <a href="product-detail.php?productcode='.$id.'&product='.$product.'"><span class="font-weight-bold"> Rs '.$price.'  / PIECE</span> </a></li><br>
                                                               <li class="list-inline-item text-grey">
                                                               <a href="product-detail.php?productcode='.$id.'&product='.$product.'"> '.$productmoq.' PIECES (MOQ)</a> </li><br>
                                                               </ul>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <p>'.$description.'</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
        ';
        
        
        
    }
echo ' 
                                    </div>
                                </div>
                                 </div>
                                 
                    <div class="pagination-box text-center">
                    <ul class="list-unstyled list-inline">
                    <li class="list-inline-item"><a href="category.php?page=subcategory&id='.$cid.'&pageno=1">First</a></li>
                    <li class="list-inline-item  '.(($pageno <= 1)? "disabled":"" ).' "> 
                    <a href="category.php?page=subcategory&id='.$cid.''.(($pageno <= 1)? "#" :"&pageno=".($pageno - 1) ).' ">Prev</a></li>';
                         for($i=1;$i<=$total_pages;$i++)
                                    {  
                             $active="";
                             if($pageno==$i)
                             {
                                 $active="active";
                             }
                echo '<li class="list-inline-item '.$active.'"> <a href="category.php?page=subcategory&id='.$cid.'&pageno='.$i.'" >'.$i.'
                                        </a>
                                    </li>';
                                    
                              } 
             echo'     <li class="list-inline-item '.(($pageno >= $total_pages) ? "disabled": "").'">
                    <a href="category.php?page=subcategory&id='.$cid.''.(($pageno >= $total_pages)? "#":"&pageno=".($pageno + 1) ).'">Next</a>
                    </li>
                    <li class="list-inline-item"><a href="category.php?page=subcategory&id='.$cid.'&pageno='.$total_pages.'">Last</a></li>
                    
                    </ul>
                    </div>
                    ';
    }
    else{
        
        echo "<h2 class='text-center'><a class='text-center text-danger font-weight-bolder'>No Product Found !!</a></h2>";
    }
}


// for all subcategory on category page
function productSubcategoryList()
{
    include("include/conn.php"); 
    $ret=mysqli_query($db,"select id,subcategory from subcategory order by rand() desc limit 6");
    while ($row=mysqli_fetch_array($ret)) 
    {
        $scid=$row['id'];
        $scid="PPK".$scid."MrrTT";
        $subcategory=$row['subcategory'];
        
        echo '
            <li>
            <a href="category.php?page=subcategory&id='.$scid.'">
            <label for="'.$subcategory.'"><i class="fa fa-arrow-right"></i> '.$subcategory.'</label> 
            </a>
            </li>
        '; 
        
    }
}


// for all category on category page
function productMainCategoryList()
{
    include("include/conn.php"); 
    $ret=mysqli_query($db,"select id,categoryName from maincategory order by rand() desc limit 6");
    while ($row=mysqli_fetch_array($ret)) 
    {
        $mcid=$row['id'];
        $mcid="PPK".$mcid."MrrTT";
        $category=$row['categoryName'];
        
        echo '
            <li>
            <a href="category.php?page=maincategory&id='.$mcid.'">
            <label for="'.$category.'"><i class="fa fa-arrow-right"></i> '.$category.'</label> 
            </a>
            </li>
        '; 
        
    }
}

// for all category on category page
function productCategoryList()
{
    include("include/conn.php"); 
    $ret=mysqli_query($db,"select id,categoryName from category order by rand() desc limit 6");
    while ($row=mysqli_fetch_array($ret)) 
    {
        $cid=$row['id'];
        $cid="PPK".$cid."MrrTT";
        $category=$row['categoryName'];
        
        echo '
            <li>
            <a href="category.php?page=category&id='.$cid.'">
            <label for="'.$category.'"><i class="fa fa-arrow-right"></i> '.$category.'</label> 
            </a>
            </li>
        '; 
        
    }
}



// for all Products In seller page
function  sellerproduct($seller, $offset,$no_of_records_per_page,$pageno)
{
    include("include/conn.php"); 
     $result=mysqli_query($db,"select p.*,s.company,c.categoryName,sc.subcategory from products as p inner join seller as s on p.sid=s.id left join category as c on p.category=c.id left join subcategory as sc on p.subcategory=sc.id where  productStatus=1 and s.id='$seller' ORDER BY p.id DESC  ");
    $count=mysqli_num_rows($result);
   //echo $total_rows = mysqli_fetch_array($result)[0];
    $total_pages = ceil($count / $no_of_records_per_page);
    $ret=mysqli_query($db,"select p.*,s.id,s.company,c.categoryName,sc.subcategory from products as p inner join seller as s on p.sid=s.id left join category as c on p.category=c.id left join subcategory as sc on p.subcategory=sc.id where  productStatus=1 and s.id='$seller' ORDER BY p.id DESC  LIMIT $offset, $no_of_records_per_page");
      $num=mysqli_num_rows($ret);
    if($num>0)
    {
    while ($row=mysqli_fetch_array($ret)) 
    {
        $id=$row['id'];
        $id="PPK".$id."MrrTT";
        $cid=$row['sid'];
        $cid="PPK".$cid."MrrTT";
        $cate=$row['categoryName'];
        $subcate=$row['subcategory'];
        $product=$row['productName'];
        $company=$row['company'];
        $pdate=$row['postingDate'];
        $price=$row['productPrice'];
        $productmoq=$row['productMoq'];
        $fprice=$row['productPriceBeforeDiscount'];
        $description=$row['productDescription'];
        $image1=$row['productImage1'];
        $image2=$row['productImage2'];
        $image3=$row['productImage3'];
        $charges=$row['shippingCharge'];
        $avail=$row['productAvailability'];
      echo '
        
                                            <div class="tab-item2">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-12">
                                                        <div class="tab-img">
                                                            <img class="main-img img-fluid" style="height:250px;width: 400px;" src="admin/productimages/'.$product.'/'.$image1.'" alt="">
                                                            <img class="sec-img img-fluid" style="height:250px;width: 400px;" src="admin/productimages/'.$product.'/'.$image2.'" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-12">
                                                        <div class="item-heading d-flex justify-content-between">
                                                            <div class="item-top">
                                                                <ul class="list-unstyled list-inline cate">
                                                                    <li class="list-inline-item"><a href="#">'.$cate.',</a></li>
                                                                    <li class="list-inline-item"><a href="#">'.$subcate.'</a></li>
                                                                </ul>
                                                                <p><a href="product-detail.php?productcode='.$id.'&product='.$product.'">'.$product.'</a></p>
                                                                <ul class="list-unstyled list-inline fav">
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="item-price">
                                                                <ul class="list-unstyled list-inline price">
                                                               <li class="list-inline-item"> 
                                                               <a href="product-detail.php?productcode='.$id.'&product='.$product.'"><span class="font-weight-bold"> Rs '.$price.'  / PIECE</span> </a></li><br>
                                                               <li class="list-inline-item text-grey">
                                                               <a href="product-detail.php?productcode='.$id.'&product='.$product.'"> '.$productmoq.' PIECES (MOQ)</a> </li><br>
                                                               </ul>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <p>'.$description.'</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
        ';
        
        
    }
 echo ' 
                                    </div>
                                </div>
                                 </div>
                                 
                    <div class="pagination-box text-center">
                    <ul class="list-unstyled list-inline">
                    <li class="list-inline-item"><a href="sellers.php?page=seller&id='.$cid.'&pageno=1">First</a></li>
                    <li class="list-inline-item  '.(($pageno <= 1)? "disabled":"" ).' "> 
                    <a href="sellers.php?page=seller&id='.$cid.''.(($pageno <= 1)? "#" :"&pageno=".($pageno - 1) ).' ">Prev</a></li>';
                         for($i=1;$i<=$total_pages;$i++)
                                    {  
                             $active="";
                             if($pageno==$i)
                             {
                                 $active="active";
                             }
                echo '<li class="list-inline-item '.$active.'"> <a href="sellers.php?page=seller&id='.$cid.'&pageno='.$i.'" >'.$i.'
                                        </a>
                                    </li>';
                                    
                              } 
             echo'     <li class="list-inline-item '.(($pageno >= $total_pages) ? "disabled": "").'">
                    <a href="sellers.php?page=seller&id='.$cid.''.(($pageno >= $total_pages)? "#":"&pageno=".($pageno + 1) ).'">Next</a>
                    </li>
                    <li class="list-inline-item"><a href="sellers.php?page=seller&id='.$cid.'&pageno='.$total_pages.'">Last</a></li>
                    
                    </ul>
                    </div>
                    ';
    }
    else{
        
        echo "<h2 class='text-center'><a class='text-center text-danger font-weight-bolder'>No Product Found !!</a></h2>";
    }
}



// for all category on All Category page
function allcategories()
{
    include("include/conn.php"); 
    
    $ret2=mysqli_query($db,"select id,categoryName from maincategory order by id desc");
      while ($row2=mysqli_fetch_array($ret2)) 
    {
        $mid=$row2['id'];
        $mcid="PPK".$mid."MrrTT";
        $mcategory=$row2['categoryName'];
        
    echo ' <div class="col-md-12 mt-2">
    <a href="category.php?page=maincategory&id='.$mcid.'">
    <h5 class="text-center mt-2 font-weight-bold">'.$mcategory.'</h5>
    </a>
    <div class="row mt-2"> 
    ';
    $ret=mysqli_query($db,"select id,categoryName from category where mcid='$mid' order by id desc");
   if(mysqli_num_rows($ret)>0)
   {
    while ($row=mysqli_fetch_array($ret)) 
    {
        $cid=$row['id'];
        $ccid="PPK".$cid."MrrTT";
        $category=$row['categoryName'];
        
echo '

  <div style="
    margin-right: 5px;
    max-width: 350px;" class="col-md-4 mb-5 border p-4 ">
                                            <div class="slr-box d-flex">
                                                <div id="slr-img" class="slr-img">
                                                    
                                                    <a href="category.php?page=category&id='.$ccid.'">
                                                    <h6 style="font-weight: bolder;" class="text-bold">
                                                       '.$category.'
                                                    </h6>
                                                       
                                                    </a>
                                                </div>
                                                <div class="slr-content">
                                                    <ul>
                                                    ';
                                                $ret1=mysqli_query($db,"select sc.id,sc.subcategory from subcategory as sc where sc.categoryid='$cid' limit 0,10 ");
                                                $count=mysqli_num_rows($ret1);
                                                if(mysqli_num_rows($ret1)>0)
                                                {
                                                    while ($row1=mysqli_fetch_array($ret1)) 
                                                    {
                                                            $scid=$row1['id'];
                                                            $scid="PPK".$scid."MrrTT";
                                                            $subcategory=$row1['subcategory'];
                                                    
                                                        echo'<li><a href="category.php?page=subcategory&id='.$scid.'">- '.$subcategory.'</a></li>';
                                                    }
                                                }
                                                else
                                                { 
                                                    echo '<li><a href="#" class="text-danger">
                                                         Sub Category Not Found !!  </a></li>'; 
                                                }
        
                                 echo'             </ul>
                                                </div>
                                            </div>  
                                        </div>

';        
        
        
        
    }
   }else{
       echo' <div style="
    margin-right: 5px;
    max-width: 350px;" class="col-md-4 mb-5 border p-4 ">
                                            <div class="slr-box d-flex">
                                            
                                                <div class="slr-content ml-3">
                                                    
                                                    <h6 href="#" class="text-danger ">
                                                         Sub Category Not Found !!  </h6    >
                                                </div>
                                            </div>
                    </div>
                                                ';
       
   }

      }
    
    echo '
    </div>
    </div>
    ';
}



// for Insert Contact 
function contact($name,$subject,$email,$message,$uid)
{
    include("include/conn.php"); 
    $ret=mysqli_query($db,"INSERT INTO `contact`(`c_name`, `c_email`, `c_subject`, `c_message`,`c_uid`) VALUES ('$name','$email','$subject','$message','$uid')");
   
  if($ret)
  {
      $msg="Message Successfully Sent !!";
      return $msg;
  }else{
     // die(mysqli_error($db));
       $msg="Message Not Sent !!";
      return $msg;
  }
    
}




// for all Products In Search page
function searchresults($search)
{
    //echo $search;die();
    include("include/conn.php"); 
//    $ret=mysqli_query($db,"SELECT `p`.*, `c`.`categoryName`, `sc`.`subcategory`, `s`.`company` FROM `products` as p left join `category` as c on p.category=c.id left join `subcategory` as sc on sc.id=p.subCategory left join `seller` as s on p.sid=s.id WHERE `p`.`productName` LIKE '%laptop' OR 5=5 %'
//    ");
    
    $ret=mysqli_query($db,"SELECT `p`.*, `c`.`categoryName`, `sc`.`subcategory`, `s`.`company` FROM `products` as p left join `category` as c on p.category=c.id left join `subcategory` as sc on sc.id=p.subCategory left join `seller` as s on p.sid=s.id WHERE `p`.`productName` LIKE '%".$search."%' OR `c`.`categoryName` LIKE '%".$search."%' OR `sc`.`subcategory` LIKE '%".$search."%' OR `s`.`company` LIKE '%".$search."%' order by p.productName ASC ");
    //$count=mysqli_error($ret);
    //echo $count; die();
    if(mysqli_num_rows($ret)>0)
    {
        while ($row=mysqli_fetch_array($ret)) 
        {
            $id=$row['id'];

            $id="PPK".$id."MrrTT";
            $cate=$row['categoryName'];
            $subcate=$row['subcategory'];
            $product=$row['productName'];
            $company=$row['company'];
            $pdate=$row['postingDate'];
            $price=$row['productPrice'];
            $productmoq=$row['productMoq'];
            $fprice=$row['productPriceBeforeDiscount'];
            $description=$row['productDescription'];
            $image1=$row['productImage1'];
            $image2=$row['productImage2'];
            $image3=$row['productImage3'];
            $charges=$row['shippingCharge'];
            $avail=$row['productAvailability'];
        echo '

                                            <div class="col-lg-4 col-md-6">
                                                <div class="tab-item">
                                                    <div class="tab-img">
                                                        <img class="main-img img-fluid" style="height:250px" src="admin/productimages/'.$product.'/'.$image1.'" alt="">
                                                        <img class="sec-img img-fluid" style="height:250px"
                                                        src="admin/productimages/'.$product.'/'.$image2.'" alt="">
                                                        <div class="layer-box">
                                                        </div>
                                                    </div>
                                                    <div class="tab-heading">
                                                        <p><a href="product-detail.php?productcode='.$id.'&product='.$product.'">'.$product.'</a></p>
                                                    </div>
                                                    <div class="img-content d-flex justify-content-between">
                                                        <div>
                                                            <ul class="list-unstyled list-inline fav">
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                             <ul class="list-unstyled list-inline price">

                                                            <li class="list-inline-item"><a href="product-detail.php?productcode='.$id.'&product='.$product.'"><span class="font-weight-bold"> Rs '.$price.'  / PIECE</span> </a></li><br>
                                                            <li class="list-inline-item text-grey"> <a href="product-detail.php?productcode='.$id.'&product='.$product.'">'.$productmoq.' PIECES (MOQ) </a></li><br>
                                                            </ul>
                                                        </div>
                                                        <div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  ';
        }
    }else
    {
        echo "<h2 class='text-center'><a class='text-center text-danger font-weight-bolder'>No Product Found !!</a></h2>";
    }
}

?>