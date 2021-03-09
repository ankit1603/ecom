<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Session;
use App\MainCategory;
use App\Brand;
use App\Country;
use App\Manufacturer;
use App\Products;
Use Image;
use App\Inventory;
use App\Inventoryvariations;
use App\Productimage;
use App\productPackage;
use App\member;
use DB;
use App\firstroyalty;
use App\secondroyalty;
use App\thirdroyalty;
use App\fourthroyalty;
use App\memberreward;
use App\User;
use App\closingstatement;
use App\familyphoto;
use App\selfiephoto;
use App\talenthunt1;
use App\talenthunt2;
use App\reward;
use App\joiningroyalty;
use DateTime;

class membercontroller extends Controller
{

     public static function sponsorplacement($sponsor_id1,$placement_id1){


     
       $details = member::where('m_id',$placement_id1)->get();


    
      $sponsor_id=$details[0]->placement_id;
     $placement=$details[0]->placement;
      if ($sponsor_id==$sponsor_id1) {
         
         return $placement;
      }
      else{
       
      $sponsorplacement= self::sponsorplacement($sponsor_id1,$sponsor_id); 
     

      }
      return $sponsorplacement;
     
   
 }
    
public function addmember(Request $request){

        if($request->isMethod('post')){
            $data = $request->all();

            $products = new member;
             $products->m_id = "juijhy";
            $products->sponsor_id = $data['sponsor_id'];
            $products->placement_id = $data['placement_id'];
            $products->placement  = $data['placement'];
             $products->m_password  = $data['password'];

             $products->m_email = $data['m_email'];
            $products->m_mobile  = $data['m_mobile'];
          
            $products->sponsor_name = $data['sponsor_name'];
            $products->m_name = $data['m_name'];
            $products->m_pan = $data['pan_no'];
            $products->m_status = "Inactive";
            $products->m_date = date('Y-m-d');
             $products->package = $data['package'];
               $products->m_photo = 'user.png';

             $package = productPackage::where('id',$data['package'] )->get();


            $products->max_capping = $package[0]->CI;
            $products->Extra_Caping = (($package[0]->CI)*2.5)/100;
              $products->Package_BV = $package[0]->BV;
               $products->package_price = $package[0]->package_price;
              




              if ($data['sponsor_id']==$data['placement_id']) {

               $sponsorplacement=$data['placement'];

            }
            else{

               $sponsorplacement= self::sponsorplacement($data['sponsor_id'],$data['placement_id']); 

                 

            }
             $products->sponsor_placement = $sponsorplacement;

           
            

             $products->save();
             $lastinsertid=$products->id;
                    if (($lastinsertid/10)<1) {
                        $genid='90000'.$lastinsertid;
                    }
                     elseif (($lastinsertid/100)<1) {
                        $genid='9000'.$lastinsertid;
                    }
                     elseif (($lastinsertid/1000)<1) {
                        $genid='900'.$lastinsertid;
                    }
                     elseif (($lastinsertid/10000)<1) {
                        $genid='90'.$lastinsertid;
                    }
                     elseif (($lastinsertid/100000)<1) {
                        $genid='9'.$lastinsertid;
                    }
                     else{

                        $genid=$lastinsertid;
                    }

                    $details = member::where('m_id',$genid)->get();
                     $rowcount2 = count($details);
                    
                 if ($rowcount2>0) {
                     $RowAlls = mysqli_fetch_array($resultDDL);
                     $uid=$details[0]->id;

                       if (($uid/10)<1) {
                        $genid='90000'.$uid;
                    }
                     elseif (($uid/100)<1) {
                        $genid='9000'.$uid;
                    }
                     elseif (($uid/1000)<1) {
                        $genid='900'.$uid;
                    }
                     elseif (($uid/10000)<1) {
                        $genid='90'.$uid;
                    }
                     elseif (($uid/100000)<1) {
                        $genid='9'.$uid;
                    }
                     else {
                        $genid=$uid;
                    }
                 }

                   DB::table('member')
                ->where('id', $lastinsertid)
                ->update(['m_id' =>$genid
               
                ]);

                 $User = new User;
                $User->name = $data['m_name'];
                 $User->user_id = $lastinsertid;

                 $User->email  = $data['m_email'];
                    $User->password  = bcrypt($data['password']);
                      $User->roll_id  = 5;
                      $User->save();
            
            
              return redirect()->back()->with('success', 'Member Registered successfully!');
           
           

        }

        
        $package = productPackage::get();
        $package_dropdown = "<option selected disabled>Select Package</option>";
        foreach ($package as $key) {
            $package_dropdown .= "<option value='".$key->id."'>".$key->package_name."</option>";

             //$maincategory = MainCategory::where(['category_sub_group_id']=>$key)->get();


        }
        
        return view('admin.member.member_registration')->with(compact('package_dropdown'));
    }



    public function EditProfile(Request $request){

   


        if($request->isMethod('post')){
            $data = $request->all();
             if($user = Auth::user())
            {
          $id = $user->user_id;
          $rollid=$user->roll_id;
         
            }
            $products = new member;
            $sponsor_id = $data['sponsor_id'];
            $placement_id = $data['placement_id'];
            $placement  = $data['placement'];
           
             $m_email = $data['m_email'];
            $m_mobile  = $data['m_mobile'];
          
            $sponsor_name = $data['sponsor_name'];
            $m_name = $data['m_name'];
            $m_pan = $data['pan_no'];
           
             $package = $data['package'];
            
                   DB::table('member')
                ->where('id', $id)
                ->update(['sponsor_id' =>$sponsor_id,'sponsor_id' =>$sponsor_id,'placement_id' =>$placement_id,'placement' =>$placement,'m_email' =>$m_email,'m_mobile' =>$m_mobile,'sponsor_name' =>$sponsor_name,'m_name' =>$m_name,'m_pan' =>$m_pan
               
                ]);

                 DB::table('users')
                ->where('user_id', $id)
                ->update(['name' =>$m_name,'email' =>$m_email
               
                ]);
            
              return redirect()->back()->with('success', 'Member Edited successfully!');
       
        }




         if($user = Auth::user())
            {
          $id = $user->user_id;
          $rollid=$user->roll_id;
         
            }

         $memberdetails = member::where('id',$id)->get();
         $memberpackage=$memberdetails[0]->package;
        $package = productPackage::where('id',$memberpackage)->get();
        $package_dropdown = "";
        foreach ($package as $key) {
            $package_dropdown .= "<option value='".$key->id."'>".$key->package_name."</option>";

             //$maincategory = MainCategory::where(['category_sub_group_id']=>$key)->get();


        }


        return view('members.editprofile')->with(compact('package_dropdown','memberpackage','memberdetails'));
    }

    public function ChangePassword(Request $request){

   


        if($request->isMethod('post')){
            $data = $request->all();
             if($user = Auth::user())
            {
          $id = $user->user_id;
          $rollid=$user->roll_id;
         
            }
$data = $request->all();
           
             if($user = Auth::user())
{ 
    $userid=$user->id;
     $useroldpassword=$user->password;

} ?><br> <?php
              $oldpassword =$data['oldpassword'];

             if (password_verify($oldpassword, $useroldpassword)) {
               

                 if ($data['newpassword']==$data['confrmpassword']) {
                  $passwordnew=bcrypt($data['newpassword']);

                     DB::table('users')
                ->where('id', $userid)
                ->update(['password' =>$passwordnew
               
                ]);


                
             }
                
             }
            
              return redirect()->back()->with('success', 'Password Changed successfully!');
       
        }


         if($user = Auth::user())
            {
          $id = $user->user_id;
          $rollid=$user->roll_id;
         
            }

         $memberdetails = member::where('id',$id)->get();
         $memberpackage=$memberdetails[0]->package;
        $package = productPackage::where('id',$memberpackage)->get();
        $package_dropdown = "";
        foreach ($package as $key) {
            $package_dropdown .= "<option value='".$key->id."'>".$key->package_name."</option>";

             //$maincategory = MainCategory::where(['category_sub_group_id']=>$key)->get();


        }


        return view('members.changepassword')->with(compact('package_dropdown','memberpackage','memberdetails'));
    }

    public function getsponsor(Request $request)
    {
        $sponsorid=$request->sponsorid;

   
        
            $details = member::where('m_id',$sponsorid)->get();
            echo $details[0]->m_name;
           
        
    }


     public function checkid(Request $request)
    {
             $id=$request->id;

   
        
            $details = member::where('m_id',$id)->get();
          $rowcount = count($details);
           if ($rowcount > 0) {
    echo "";
} else {
    echo "This <b class='text-success'>(" . $id . ")</b> ID is not valid.";
}
           
        
    }
 public function checkpanno(Request $request)
    {


               $panno=$request->panno;

   
        
            $details = member::where('m_pan',$panno)->get();
           $rowcount = count($details);
           if ($rowcount > 0) {
             echo "This <b class='text-success'>(" . $panno . ")</b> This Pan Already registered.";
   
} else {

     echo "";
   
}
           
        
    }


    public function checkplacement(Request $request)
    {
            
            $placement = $request->placement;
            $sponsor_id = $request->sponsor_id;


if($placement=="Left"){
    $placement2="Right";
}
else{
    $placement2="Left";
}
   
        
            $details = member::where('placement_id',$sponsor_id)->where('placement',$placement)->get();
          $rowcount = count($details);
          if ($rowcount > 0) {
            $detailss = member::where('placement_id',$sponsor_id)->where('placement',$placement2)->get();
          $rowcount2 = count($detailss);
  
    if($rowcount2>0){
        echo "The left and right placements of this ID<b class='text-success'>(".$sponsor_id.")</b> are already filled.Please try another id";
    }
    else{
        echo "The ".$placement." of this ID<b class='text-success'>(".$sponsor_id.")</b> is pre-filled. Please try the ".$placement2." placement.";
    }
} else {
    echo "";
}
           
        
    }

     public function memberList(Request $request){

        $memberList = member::get();

         $Products = Products::get();

        $categorydetails=MainCategory::orderBy('id', 'asc')->get();

        $package = productPackage::get();
        $package_dropdown = "<option selected disabled>Select Package</option>";
        foreach ($package as $key) {
            $package_dropdown .= "<option value='".$key->id."'>".$key->package_name."</option>";
        }

        return view('admin.member.view_member',compact('memberList','Products','categorydetails','package_dropdown'));
    }

     public function DirectDownline(Request $request){

         if($user = Auth::user())
            {
          $id = $user->user_id;
           $rollid=$user->roll_id;
         
            }
         $member = member::where('id',$id)->get();  
          $memberid=$member[0]->m_id;

        $memberList = member::where('sponsor_id',$memberid)->get();

         $Products = Products::get();

        $categorydetails=MainCategory::orderBy('id', 'asc')->get();

         if ($rollid==1) {
             return view('admin.member.direct_downline',compact('memberList','Products','categorydetails'));
        }
        else{
             return view('members.direct_downline',compact('memberList','Products','categorydetails'));
        }

       
    }

    public static function getdownline($id,$i) {
     
         $memberList = member::where('placement_id',$id)->get();
  

    foreach($memberList as $product) {  ?>
                                            
                                            <tr>
                                                
                                              <td><?php echo $i; ?></td>
                                              <td><?php echo $product->m_name ;?></td>
                                             
                                              <td><?php echo $product->m_id ;?></td>
                                                <td><?php echo $product->sponsor_id ?></td>
                                              
                                              <td> <?php echo $product->m_status ?></td>

                                            </tr>
            <?php  $i++;  ?>                                
    <?php self::getdownline($product->m_id,$i);     
                                    
                                           }
}



     public function LeftDownline(Request $request){

         if($user = Auth::user())
            {
          $id = $user->user_id;
          $rollid=$user->roll_id;
         
            }
         $member = member::where('id',$id)->get();  
          $memberid=$member[0]->m_id;

        $memberLeft = member::where('placement_id',$memberid)->where('placement','Left')->get();
        $memberleftcount=count($memberLeft);

        if ($memberleftcount>0) {
           
        }

         $Products = Products::get();

        $categorydetails=MainCategory::orderBy('id', 'asc')->get();

        if ($rollid==1) {
             return view('admin.member.left_downline',compact('memberLeft','Products','categorydetails'));
        }
        else{
             return view('members.left_downline',compact('memberLeft','Products','categorydetails'));
        }

       
    }


     public function RightDownline(Request $request){

         if($user = Auth::user())
            {
          $id = $user->user_id;
          $rollid=$user->roll_id;
         
            }
         $member = member::where('id',$id)->get();  
          $memberid=$member[0]->m_id;

        $memberLeft = member::where('placement_id',$memberid)->where('placement','Right')->get();
        $memberleftcount=count($memberLeft);

        if ($memberleftcount>0) {
           
        }

         $Products = Products::get();

        $categorydetails=MainCategory::orderBy('id', 'asc')->get();

         if ($rollid==1) {
             return view('admin.member.left_downline',compact('memberLeft','Products','categorydetails'));
        }
        else{
             return view('members.left_downline',compact('memberLeft','Products','categorydetails'));
        }

       
    }

     public function MatchingTree(Request $request){

         if($user = Auth::user())
            {
          $id = $user->user_id;
            $rollid=$user->roll_id;
         
            }
         $member = member::where('id',$id)->get();  
          $memberid=$member[0]->m_id;

        $memberList = member::where('sponsor_id',$memberid)->get();

         $Products = Products::get();

        $categorydetails=MainCategory::orderBy('id', 'asc')->get();
          if ($rollid==1) {
              return view('admin.member.matching_tree',compact('memberList','Products','categorydetails','member'));
        }
        else{
              return view('members.matching_tree',compact('memberList','Products','categorydetails','member'));
        }

      
    }

     public function generatetreee(Request $request)
    {
           $member_id=$request->member_id;

   
        
            $details = member::where('m_id',$member_id)->get();
            $memberLeft = member::where('placement_id',$member_id)->where('placement','Left')->get();
            $memberleftcount=count($memberLeft);
             $memberRight = member::where('placement_id',$member_id)->where('placement','Right')->get();
           $memberRightcount=count($memberRight);
          $rowcount = count($details);
           if ($memberleftcount > 0) {

     $id1 = $memberLeft[0]->m_id;
                              } 


    if ($memberRightcount > 0) {

    $id2 = $memberRight[0]->m_id;
                              }  ?>


                              <div class="row">
    <div class="col-12">
 <i onclick="generateTree(<?php echo $member_id; ?>)" class="tooltipme">
                                                    <img class="user-img-radious-style" height="50" src="../font_assets/images/icon/<?php echo $details[0]->m_photo ?>" alt="Member Photo"/><br/>
                                                         
                                                    <span class="tooltipmetext" tabindex="1">ID : <?php
                                                        echo $member_id;
                                                         ?> <br/> Name : <?php echo $details[0]->m_name;
                                                         ?> <br/>Mobile : <?php echo $details[0]->m_mobile;
                                                         ?><br/>Email : <?php echo $details[0]->m_email;
                                                         ?><br/>Joining date : <?php echo $details[0]->m_date;
                                                         ?> </span>
                                                </i>
    </div>
</div><?php
           
        
    


    if (isset($id2) && isset($id1)) { ?>
    <div class="text-center">
        <img src="../font_assets/images/icon/treearrow2.jpg" style="width: 55%" alt=""/>
    </div>
<?php } elseif (isset($id1)) { ?>
    <div class="text-center">
        <img src="../font_assets/images/icon/treearrow3.jpg" style="width: 55%" alt=""/>
    </div>
<?php } elseif (isset($id2)) { ?>
    <div class="text-center">
        <img src="../font_assets/images/icon/treearrow4.jpg" style="width: 55%" alt=""/>
    </div>
<?php } ?>


<div class="row">
    <div class="col-6">
        <?php if (isset($id1)) { ?>
            <i onclick="generateTree(<?php echo $id1; ?>)" class="tooltipme">

                <?php
                 $details = member::where('m_id',$id1)->get();
               
                ?>
                <img class="user-img-radious-style" height="50" src="../font_assets/images/icon/<?php echo $details[0]->m_photo ?>" alt="Member Photo"/><br/>
                                                         
                                                    <span class="tooltipmetext" tabindex="1">ID : <?php
                                                        echo $id1;
                                                         ?> <br/> Name : <?php echo $details[0]->m_name;
                                                         ?> <br/>Mobile : <?php echo $details[0]->m_mobile;
                                                         ?><br/>Email : <?php echo $details[0]->m_email;
                                                         ?><br/>Joining date : <?php echo $details[0]->m_date;
                                                         ?> </span>
            </i>
        <?php } ?>
    </div>
    <div class="col-6">
        <?php if (isset($id2)) { ?>
            <i onclick="generateTree(<?php echo $id2; ?>)" class="tooltipme">

                <?php
                   $details = member::where('m_id',$id2)->get();
                ?>
                <img class="user-img-radious-style" height="50" src="../font_assets/images/icon/<?php echo $details[0]->m_photo ?>" alt="Member Photo"/><br/>
                                                         
                                                    <span class="tooltipmetext" tabindex="1">ID : <?php
                                                        echo $id2;
                                                         ?> <br/> Name : <?php echo $details[0]->m_name;
                                                         ?> <br/>Mobile : <?php echo $details[0]->m_mobile;
                                                         ?><br/>Email : <?php echo $details[0]->m_email;
                                                         ?><br/>Joining date : <?php echo $details[0]->m_date;
                                                         ?> </span>
            </i>
        <?php } ?>
    </div>
</div>

<?php
if (isset($id1)) {


    $member_id=$id1;

   
        
            $details = member::where('m_id',$member_id)->get();
            $memberLeft = member::where('placement_id',$member_id)->where('placement','Left')->get();
            $memberleftcount=count($memberLeft);
             $memberRight = member::where('placement_id',$member_id)->where('placement','Right')->get();
           $memberRightcount=count($memberRight);
          $rowcount = count($details);
           if ($memberleftcount > 0) {

     $id3 = $memberLeft[0]->m_id;
                              } 


    if ($memberRightcount > 0) {

    $id4 = $memberRight[0]->m_id;
                              }  

}

if (isset($id2)) {
   
    $member_id=$id2;

   
        
            $details = member::where('m_id',$member_id)->get();
            $memberLeft = member::where('placement_id',$member_id)->where('placement','Left')->get();
            $memberleftcount=count($memberLeft);
             $memberRight = member::where('placement_id',$member_id)->where('placement','Right')->get();
           $memberRightcount=count($memberRight);
          $rowcount = count($details);
           if ($memberleftcount > 0) {

     $id5 = $memberLeft[0]->m_id;
                              } 


    if ($memberRightcount > 0) {

    $id6 = $memberRight[0]->m_id;
                              }  
}
?><div class="row">
    <div class="col-6">
        <?php if (isset($id4) && isset($id3)) { ?>
            <div class="text-center">
                <img src="../font_assets/images/icon/treearrow2.jpg" style="width: 55%" alt=""/>
            </div>
        <?php } elseif (isset($id3)) { ?>
            <div class="text-center">
                <img src="../font_assets/images/icon/treearrow3.jpg" style="width: 55%" alt=""/>
            </div>
        <?php } elseif (isset($id4)) { ?>
            <div class="text-center">
                <img src="../font_assets/images/icon/treearrow4.jpg" style="width: 55%" alt=""/>
            </div>
        <?php } ?>
    </div>
    <div class="col-6">
        <?php if (isset($id6) && isset($id5)) { ?>
            <div class="text-center">
                <img src="../font_assets/images/icon/treearrow2.jpg" style="width: 55%" alt=""/>
            </div>
        <?php } elseif (isset($id5)) { ?>
            <div class="text-center">
                <img src="../font_assets/images/icon/treearrow3.jpg" style="width: 55%" alt=""/>
            </div>
        <?php } elseif (isset($id6)) { ?>
            <div class="text-center">
                <img src="../font_assets/images/icon/treearrow4.jpg" style="width: 55%" alt=""/>
            </div>
        <?php } ?>
    </div>
</div>

<div class="row">
    <div class="col-3">
        <?php if (isset($id3)) { ?>
            <i onclick="generateTree(<?php echo $id3; ?>)" class="tooltipme">

 <?php
                   $details = member::where('m_id',$id3)->get();
                ?>
                <img class="user-img-radious-style" height="50" src="../font_assets/images/icon/<?php echo $details[0]->m_photo ?>" alt="Member Photo"/><br/>
                                                         
                                                    <span class="tooltipmetext" tabindex="1">ID : <?php
                                                        echo $id3;
                                                         ?> <br/> Name : <?php echo $details[0]->m_name;
                                                         ?> <br/>Mobile : <?php echo $details[0]->m_mobile;
                                                         ?><br/>Email : <?php echo $details[0]->m_email;
                                                         ?><br/>Joining date : <?php echo $details[0]->m_date;
                                                         ?> </span>
            </i>
        <?php } ?>
    </div>
    <div class="col-3">
        <?php if (isset($id4)) { ?>
            <i onclick="generateTree(<?php echo $id4; ?>)" class="tooltipme">

                 <?php
                   $details = member::where('m_id',$id4)->get();
                ?>
                <img class="user-img-radious-style" height="50" src="../font_assets/images/icon/<?php echo $details[0]->m_photo ?>" alt="Member Photo"/><br/>
                                                         
                                                    <span class="tooltipmetext" tabindex="1">ID : <?php
                                                        echo $id4;
                                                         ?> <br/> Name : <?php echo $details[0]->m_name;
                                                         ?> <br/>Mobile : <?php echo $details[0]->m_mobile;
                                                         ?><br/>Email : <?php echo $details[0]->m_email;
                                                         ?><br/>Joining date : <?php echo $details[0]->m_date;
                                                         ?> </span>
            </i>
        <?php } ?>
    </div>
    <div class="col-3">
        <?php if (isset($id5)) { ?>
            <i onclick="generateTree(<?php echo $id5; ?>)" class="tooltipme">

                <?php
                   $details = member::where('m_id',$id5)->get();
                ?>
                <img class="user-img-radious-style" height="50" src="../font_assets/images/icon/<?php echo $details[0]->m_photo ?>" alt="Member Photo"/><br/>
                                                         
                                                    <span class="tooltipmetext" tabindex="1">ID : <?php
                                                        echo $id5;
                                                         ?> <br/> Name : <?php echo $details[0]->m_name;
                                                         ?> <br/>Mobile : <?php echo $details[0]->m_mobile;
                                                         ?><br/>Email : <?php echo $details[0]->m_email;
                                                         ?><br/>Joining date : <?php echo $details[0]->m_date;
                                                         ?> </span>
            </i>
        <?php } ?>
    </div>
    <div class="col-3">
        <?php if (isset($id6)) { ?>
            <i onclick="generateTree(<?php echo $id6; ?>)" class="tooltipme">

                <?php
                   $details = member::where('m_id',$id6)->get();
                ?>
                <img class="user-img-radious-style" height="50" src="../font_assets/images/icon/<?php echo $details[0]->m_photo ?>" alt="Member Photo"/><br/>
                                                         
                                                    <span class="tooltipmetext" tabindex="1">ID : <?php
                                                        echo $id6;
                                                         ?> <br/> Name : <?php echo $details[0]->m_name;
                                                         ?> <br/>Mobile : <?php echo $details[0]->m_mobile;
                                                         ?><br/>Email : <?php echo $details[0]->m_email;
                                                         ?><br/>Joining date : <?php echo $details[0]->m_date;
                                                         ?> </span>
            </i>
        <?php } ?>
    </div>
</div><?php



           
        
    }


 public function dailyclosing(Request $request)
    {

          $detailsssss = member::where('id','1')->get();
           $turnover=$detailsssss[0]->Daily_Turnover; 
           
            $todaydate=date("Y-m-d");
            $details = joiningroyalty::where('status','Pending')->get();
       
             $totalcount=count($details);
            $distributionamount=($turnover*1)/100;
             if ($totalcount>0) {
                $amount=$distributionamount/$totalcount;
            }

           foreach ($details as $key => $memdetail) {


             $m_id = $memdetail->member_id;
             $id=$memdetail->id;
            $startdate=$memdetail->Start_Date;
             $enddate=$memdetail->End_Date;
              $maxcount=$memdetail->Max_Count;
               $count=$memdetail->Count;
                $datepaid=$memdetail->Date_Paid;


        if ($startdate<=$todaydate && $todaydate<= $enddate) {
                  
                    if ($datepaid=="") {
                    

                     $date1= strtotime($startdate);
                       $date2=strtotime($todaydate);
                     $diff=(int)(($date2 - $date1)/86400);
                     $countnew=($diff)+1;
                       if ($countnew==$maxcount) {
                           $status='Approve';
                           $todaydate=NULL;
                       }
                       else{

                        $status='Pending';

                       }
                        $amountpaid=$countnew* $amount;

                        DB::table('joining_royalty')
                        ->where('id', $id)
                        ->update(['status' =>$status,'Date_Paid' =>$todaydate,'Count' =>$countnew
                       
                        ]);


                       member::where('m_id',$m_id)->increment('joining_royalty_income',$amountpaid);
                       member::where('m_id',$m_id)->increment('Total_income',$amountpaid);

                    }
                    else{


                          $date1= strtotime($datepaid);
                       $date2=strtotime($todaydate);
                      $diffs=(int)(($date2 - $date1)/86400);
                        
                       $diff=$diffs;
                       $countnew=($diff)+$count;
                       if ($countnew==$maxcount) {
                            $status='Approve';
                            $todaydate=NULL;
                       }
                       else{

                        $status='Pending';

                       }
                         $amountpaid=$diff* $amount; 

                        DB::table('joining_royalty')->where('id', $id)->update(['status' =>$status,'Date_Paid' =>$todaydate,'Count' =>$countnew]);
                      
                      


                       member::where('m_id',$m_id)->increment('joining_royalty_income',$amountpaid);
                        member::where('m_id',$m_id)->increment('Total_income',$amountpaid);

                    }
                    
                }

                 else{

                      

                       $diff=$maxcount-$count;
                       $countnew=($diff)+$count;
                       if ($countnew==$maxcount) {
                           $status='Approve';
                           $todaydate=NULL;
                       }
                       else{

                        $status='Pending';

                       }
                       $amountpaid=$diff* $amount;

                        DB::table('joining_royalty')
                        ->where('id', $id)
                        ->update(['status' =>$status,'Date_Paid' =>$enddate,'Count' =>$countnew
                       
                        ]);


                       member::where('m_id',$m_id)->increment('joining_royalty_income',$amountpaid);
                        member::where('m_id',$m_id)->increment('Total_income',$amountpaid);

          
        
                }

               

           }



           $todaydate=date("Y-m-d");
            $details = firstroyalty::where('status','Pending')->get();
        
            $totalcount=count($details);
            $distributionamount=($turnover*1)/100;
             if ($totalcount>0) {
                $amount=$distributionamount/$totalcount;
            }

           foreach ($details as $key => $memdetail) {


             $m_id = $memdetail->member_id;
             $id=$memdetail->id;
            $startdate=$memdetail->Start_Date;
             $enddate=$memdetail->End_Date;
              $maxcount=$memdetail->Max_Count;
               $count=$memdetail->Count;
                $datepaid=$memdetail->Date_Paid;


        if ($startdate<=$todaydate && $todaydate<= $enddate) {
                  
                    if ($datepaid=="") {
                    

                     $date1= strtotime($startdate);
                       $date2=strtotime($todaydate);
                     $diff=(int)(($date2 - $date1)/86400);
                     $countnew=($diff)+1;
                       if ($countnew==$maxcount) {
                           $status='Approve';
                           $todaydate=NULL;
                       }
                       else{

                        $status='Pending';

                       }
                        $amountpaid=$countnew* $amount;

                        DB::table('first_royalty')
                        ->where('id', $id)
                        ->update(['status' =>$status,'Date_Paid' =>$todaydate,'Count' =>$countnew
                       
                        ]);


                       member::where('m_id',$m_id)->increment('royalty_1_income',$amountpaid);
                       member::where('m_id',$m_id)->increment('Total_income',$amountpaid);

                    }
                    else{


                          $date1= strtotime($datepaid);
                       $date2=strtotime($todaydate);
                      $diffs=(int)(($date2 - $date1)/86400);
                        
                       $diff=$diffs;
                       $countnew=($diff)+$count;
                       if ($countnew==$maxcount) {
                            $status='Approve';
                            $todaydate=NULL;
                       }
                       else{

                        $status='Pending';

                       }
                         $amountpaid=$diff* $amount; 

                        DB::table('first_royalty')->where('id', $id)->update(['status' =>$status,'Date_Paid' =>$todaydate,'Count' =>$countnew]);
                    


                       member::where('m_id',$m_id)->increment('royalty_1_income',$amountpaid);
                        member::where('m_id',$m_id)->increment('Total_income',$amountpaid);

                    }
                    
                }

                 else{

                      

                       $diff=$maxcount-$count;
                       $countnew=($diff)+$count;
                       if ($countnew==$maxcount) {
                           $status='Approve';
                           $todaydate=NULL;
                       }
                       else{

                        $status='Pending';

                       }
                       $amountpaid=$diff* $amount;

                        DB::table('first_royalty')
                        ->where('id', $id)
                        ->update(['status' =>$status,'Date_Paid' =>$enddate,'Count' =>$countnew
                       
                        ]);


                       member::where('m_id',$m_id)->increment('royalty_1_income',$amountpaid);
                        member::where('m_id',$m_id)->increment('Total_income',$amountpaid);

          
        
                }

               

           }




            $todaydate=date("Y-m-d");
            $details = secondroyalty::where('status','Pending')->get();
           $details = secondroyalty::where('status','Pending')->get();
           $totalcount=count($details);
            $distributionamount=($turnover*1)/100;
            if ($totalcount>0) {
                $amount=$distributionamount/$totalcount;
            }
          

           foreach ($details as $key => $memdetail) {


             $m_id = $memdetail->member_id;
            $id=$memdetail->id;
            $startdate=$memdetail->Start_Date;
             $enddate=$memdetail->End_Date;
              $maxcount=$memdetail->Max_Count;
               $count=$memdetail->Count;
                $datepaid=$memdetail->Date_Paid;


        if ($startdate<=$todaydate && $todaydate<= $enddate) {

                    if ($datepaid=="") {
                    

                     $date1= strtotime($startdate);
                       $date2=strtotime($todaydate);
                     $diff=(int)(($date2 - $date1)/86400);
                     $countnew=($diff)+1;
                       if ($countnew==$maxcount) {
                           $status='Approve';
                           $todaydate=NULL;
                       }
                       else{

                        $status='Pending';

                       }
                        $amountpaid=$countnew* $amount;

                        DB::table('second_royalty')
                        ->where('id', $id)
                        ->update(['status' =>$status,'Date_Paid' =>$todaydate,'Count' =>$countnew
                       
                        ]);


                       member::where('m_id',$m_id)->increment('royalty_2_income',$amountpaid);
                       member::where('m_id',$m_id)->increment('Total_income',$amountpaid);

                    }
                    else{

                          $date1= strtotime($datepaid);
                       $date2=strtotime($todaydate);
                     $diffs=(int)(($date2 - $date1)/86400);
                        
                       $diff=$diffs;
                       $countnew=($diff)+$count;
                       if ($countnew==$maxcount) {
                           $status='Approve';
                            $todaydate=NULL;
                       }
                       else{

                        $status='Pending';

                       }
                       $amountpaid=$diff* $amount; 


                       DB::table('second_royalty')
                        ->where('id', $id)
                        ->update(['status' =>$status,'Date_Paid' =>$todaydate,'Count' =>$countnew
                       
                        ]);


                       member::where('m_id',$m_id)->increment('royalty_2_income',$amountpaid);
                        member::where('m_id',$m_id)->increment('Total_income',$amountpaid);

                    }
                    
                }

                 else{

                      

                       $diff=$maxcount-$count;
                       $countnew=($diff)+$count;
                       if ($countnew==$maxcount) {
                           $status='Approve';
                           $todaydate=NULL;
                       }
                       else{

                        $status='Pending';

                       }
                       $amountpaid=$diff* $amount;

                        DB::table('second_royalty')
                        ->where('id', $id)
                        ->update(['status' =>$status,'Date_Paid' =>$enddate,'Count' =>$countnew
                       
                        ]);


                       member::where('m_id',$m_id)->increment('royalty_2_income',$amountpaid);
                        member::where('m_id',$m_id)->increment('Total_income',$amountpaid);

          
        
                }

               

           }




            $todaydate=date("Y-m-d");
            $details = thirdroyalty::where('status','Pending')->get();
           $details = thirdroyalty::where('status','Pending')->get();
           $totalcount=count($details);
            $distributionamount=($turnover*2)/100;
             if ($totalcount>0) {
                $amount=$distributionamount/$totalcount;
            }

           foreach ($details as $key => $memdetail) {


             $m_id = $memdetail->member_id;
            $id=$memdetail->id;
            $startdate=$memdetail->Start_Date;
             $enddate=$memdetail->End_Date;
              $maxcount=$memdetail->Max_Count;
               $count=$memdetail->Count;
                $datepaid=$memdetail->Date_Paid;


        if ($startdate<=$todaydate && $todaydate<= $enddate) {

                    if ($datepaid=="") {
                    

                     $date1= strtotime($startdate);
                       $date2=strtotime($todaydate);
                     $diff=(int)(($date2 - $date1)/86400);
                     $countnew=($diff)+1;
                       if ($countnew==$maxcount) {
                           $status='Approve';
                           $todaydate=NULL;
                       }
                       else{

                        $status='Pending';

                       }
                        $amountpaid=$countnew* $amount;

                        DB::table('third_royalty')
                        ->where('id', $id)
                        ->update(['status' =>$status,'Date_Paid' =>$todaydate,'Count' =>$countnew
                       
                        ]);


                       member::where('m_id',$m_id)->increment('royalty_3_income',$amountpaid);
                       member::where('m_id',$m_id)->increment('Total_income',$amountpaid);

                    }
                    else{

                          $date1= strtotime($datepaid);
                       $date2=strtotime($todaydate);
                     $diffs=(int)(($date2 - $date1)/86400);
                        
                       $diff=$diffs;
                       $countnew=($diff)+$count;
                       if ($countnew==$maxcount) {
                           $status='Approve';
                            $todaydate=NULL;
                       }
                       else{

                        $status='Pending';

                       }
                       $amountpaid=$diff* $amount; 


                       DB::table('third_royalty')
                        ->where('id', $id)
                        ->update(['status' =>$status,'Date_Paid' =>$todaydate,'Count' =>$countnew
                       
                        ]);


                       member::where('m_id',$m_id)->increment('royalty_3_income',$amountpaid);
                        member::where('m_id',$m_id)->increment('Total_income',$amountpaid);

                    }
                    
                }

                 else{

                      

                       $diff=$maxcount-$count;
                       $countnew=($diff)+$count;
                       if ($countnew==$maxcount) {
                           $status='Approve';
                           $todaydate=NULL;
                       }
                       else{

                        $status='Pending';

                       }
                       $amountpaid=$diff* $amount;

                        DB::table('third_royalty')
                        ->where('id', $id)
                        ->update(['status' =>$status,'Date_Paid' =>$enddate,'Count' =>$countnew
                       
                        ]);


                       member::where('m_id',$m_id)->increment('royalty_3_income',$amountpaid);
                        member::where('m_id',$m_id)->increment('Total_income',$amountpaid);

          
        
                }

               

           }



             $todaydate=date("Y-m-d");
            $details = fourthroyalty::where('status','Pending')->get();
           $details = fourthroyalty::where('status','Pending')->get();
           $totalcount=count($details);
            $distributionamount=($turnover*3)/100;
             if ($totalcount>0) {
                $amount=$distributionamount/$totalcount;
            }

           foreach ($details as $key => $memdetail) {


             $m_id = $memdetail->member_id;
            $id=$memdetail->id;
            $startdate=$memdetail->Start_Date;
             $enddate=$memdetail->End_Date;
              $maxcount=$memdetail->Max_Count;
               $count=$memdetail->Count;
                $datepaid=$memdetail->Date_Paid;


        if ($startdate<=$todaydate && $todaydate<= $enddate) {

                    if ($datepaid=="") {
                    

                     $date1= strtotime($startdate);
                       $date2=strtotime($todaydate);
                     $diff=(int)(($date2 - $date1)/86400);
                     $countnew=($diff)+1;
                       if ($countnew==$maxcount) {
                           $status='Approve';
                           $todaydate=NULL;
                       }
                       else{

                        $status='Pending';

                       }
                        $amountpaid=$countnew* $amount;

                        DB::table('fourth_royalty')
                        ->where('id', $id)
                        ->update(['status' =>$status,'Date_Paid' =>$todaydate,'Count' =>$countnew
                       
                        ]);


                       member::where('m_id',$m_id)->increment('royalty_4_income',$amountpaid);
                       member::where('m_id',$m_id)->increment('Total_income',$amountpaid);

                    }
                    else{

                          $date1= strtotime($datepaid);
                       $date2=strtotime($todaydate);
                     $diffs=(int)(($date2 - $date1)/86400);
                        
                       $diff=$diffs;
                       $countnew=($diff)+$count;
                       if ($countnew==$maxcount) {
                           $status='Approve';
                            $todaydate=NULL;
                       }
                       else{

                        $status='Pending';

                       }
                       $amountpaid=$diff* $amount; 


                       DB::table('fourth_royalty')
                        ->where('id', $id)
                        ->update(['status' =>$status,'Date_Paid' =>$todaydate,'Count' =>$countnew
                       
                        ]);


                       member::where('m_id',$m_id)->increment('royalty_4_income',$amountpaid);
                        member::where('m_id',$m_id)->increment('Total_income',$amountpaid);

                    }
                    
                }

                 else{

                      

                       $diff=$maxcount-$count;
                       $countnew=($diff)+$count;
                       if ($countnew==$maxcount) {
                           $status='Approve';
                           $todaydate=NULL;
                       }
                       else{

                        $status='Pending';

                       }
                       $amountpaid=$diff* $amount;

                        DB::table('fourth_royalty')
                        ->where('id', $id)
                        ->update(['status' =>$status,'Date_Paid' =>$enddate,'Count' =>$countnew
                       
                        ]);


                       member::where('m_id',$m_id)->increment('royalty_4_income',$amountpaid);
                        member::where('m_id',$m_id)->increment('Total_income',$amountpaid);

          
        
                }

               

           }


 
     
     $todaydate=date("Y-m-d");
     $details = member::where('m_status','Active')->where('Repurchase','>=','300')->get();
           foreach ($details as $key => $memdetail) {
         
            $memberid=$memdetail->m_id;
            $Repurchase=$memdetail->Repurchase;
            $Repurchase_income=($Repurchase*3)/100;
            $Repurchase=0;
            $Left_Repurchase=$memdetail->Left_Repurchase;
            $Right_Repurchase=$memdetail->Right_Repurchase;
            $Extra_Caping=$memdetail->Extra_Caping;
            $matching_repurchase_income=$memdetail->matching_repurchase_income;
            if ($Left_Repurchase>=300 && $Right_Repurchase>=300) {

                if ($Left_Repurchase>=$Right_Repurchase) {
                    $matching_repurchase_income=$matching_repurchase_income+($Right_Repurchase*2)/100;
                    if ($matching_repurchase_income>$Extra_Caping) {
                        $matching_repurchase_income=$Extra_Caping;
                    }
                    $Left_Repurchase=$Left_Repurchase-$Right_Repurchase;
                    $Right_Repurchase=0;
                }
                else{

                    $matching_repurchase_income=$matching_repurchase_income+($Left_Repurchase*2)/100;
                     if ($matching_repurchase_income>$Extra_Caping) {
                        $matching_repurchase_income=$Extra_Caping;
                    }
                    $Right_Repurchase=$Right_Repurchase-$Left_Repurchase;
                    $Left_Repurchase=0;

                }
                
            }
             

            DB::table('member')
                        ->where('m_id',$memberid)
                        ->update(['Repurchase' =>$Repurchase,'Repurchase_income' =>$Repurchase_income,'Left_Repurchase' =>$Left_Repurchase,'Right_Repurchase' =>$Right_Repurchase,'matching_repurchase_income' =>$matching_repurchase_income
                        ]);

           }
           
         

         $todaydate=date("Y-m-d");
         $details = member::where('m_status','Active')->where([
                    ['Left_Repurchase', '>=', '300'],
                    ['Right_Repurchase', '>=', '300']
                ])->get();
           foreach ($details as $key => $memdetail) {
            $memberid=$memdetail->m_id;
            $Left_Repurchase=$memdetail->Left_Repurchase;
            $Right_Repurchase=$memdetail->Right_Repurchase;
            $Extra_Caping=$memdetail->Extra_Caping;
            $matching_repurchase_income=$memdetail->matching_repurchase_income;
            if ($Left_Repurchase>=300 && $Right_Repurchase>=300) {

                if ($Left_Repurchase>=$Right_Repurchase) {
                    $matching_repurchase_income=$matching_repurchase_income+($Right_Repurchase*2)/100;
                    if ($matching_repurchase_income>$Extra_Caping) {
                        $matching_repurchase_income=$Extra_Caping;
                    }
                    $Left_Repurchase=$Left_Repurchase-$Right_Repurchase;
                    $Right_Repurchase=0;
                }
                else{

                    $matching_repurchase_income=$matching_repurchase_income+($Left_Repurchase*2)/100;
                     if ($matching_repurchase_income>$Extra_Caping) {
                        $matching_repurchase_income=$Extra_Caping;
                    }
                    $Right_Repurchase=$Right_Repurchase-$Left_Repurchase;
                    $Left_Repurchase=0;

                }
                
            }

              DB::table('member')
                        ->where('m_id', $memberid)
                        ->update(['Left_Repurchase' =>$Left_Repurchase,'Right_Repurchase' =>$Right_Repurchase,'matching_repurchase_income' =>$matching_repurchase_income
                       
                        ]);

           }


           
         $todaydate=date("Y-m-d");
          $detailsss = member::where('id','1')->get();
           $Talent_Hunt_Amount_1=$detailsss[0]->Talent_Hunt_Amount_1;
             $Talent_Hunt_Count_1=$detailsss[0]->Talent_Hunt_Count_1;
             if($Talent_Hunt_Count_1>0)
             {
            $distributionamount=($Talent_Hunt_Amount_1+(($turnover*1)/100))/$Talent_Hunt_Count_1;
         $details = member::where('m_status','Active')->where('Talent_Hunt_Status1','1')->get();
           foreach ($details as $key => $memdetail) {
            $memberid=$memdetail->m_id;
            $Talent_Hunt_Income_1=$memdetail->Talent_Hunt_Income_1;
            $Talent_Hunt_Income_1=$Talent_Hunt_Income_1 + $distributionamount;
            $Talent_Hunt_Status1=0;
           

            DB::table('member')
                        ->where('m_id', $memberid)
                        ->update(['Talent_Hunt_Income_1' =>$Talent_Hunt_Income_1,'Talent_Hunt_Status1' =>$Talent_Hunt_Status1
                       
                        ]);

           }
       }
           

           $todaydate=date("Y-m-d");
          $detailsss = member::where('id','1')->get();
            $Talent_Hunt_Amount_2=$detailsss[0]->Talent_Hunt_Amount_2;
             $Talent_Hunt_Count_2=$detailsss[0]->Talent_Hunt_Count_2;
              if($Talent_Hunt_Count_2>0)
             {
            $distributionamount=($Talent_Hunt_Amount_2+(($turnover*2)/100))/$Talent_Hunt_Count_2;
         $details = member::where('m_status','Active')->where('Talent_Hunt_Status2','1')->get();
           foreach ($details as $key => $memdetail) {
            $memberid=$memdetail->m_id;
            $Talent_Hunt_Income_2=$memdetail->Talent_Hunt_Income_2;
            $Talent_Hunt_Income_2=$Talent_Hunt_Income_2 + $distributionamount;
            $Talent_Hunt_Status2=0;
           

            DB::table('member')
                        ->where('m_id', $memberid)
                        ->update(['Talent_Hunt_Income_2' =>$Talent_Hunt_Income_2,'Talent_Hunt_Status2' =>$Talent_Hunt_Status2
                       
                        ]);

           }
       }


        $todaydate=date("Y-m-d");
             
         $details = member::where('m_status','Active')->orderby('id','desc')->get();
             
           foreach ($details as $key => $memdetail) {


            $memberid=$memdetail->m_id;
            $wallet_amount=$memdetail->wallet_amount;
            $wallet=$memdetail->wallet;
            $royalty_1_income=$memdetail->royalty_1_income;
            $royalty_2_income=$memdetail->royalty_2_income;
             $royalty_3_income=$memdetail->royalty_3_income;
            $royalty_4_income=$memdetail->royalty_4_income;
            $Repurchase_income=$memdetail->Repurchase_income;
             $Talent_Hunt_Income_1=$memdetail->Talent_Hunt_Income_1;
              $Talent_Hunt_Income_2=$memdetail->Talent_Hunt_Income_2;
               $joining_royalty_income=$memdetail->joining_royalty_income;
            $matching_repurchase_income=$memdetail->matching_repurchase_income;
             $Spill_Income=$memdetail->Spill_Income;
             $totalincome=$memdetail->totalincome;
             $max_capping=$memdetail->max_capping;
             $totalincome=$royalty_1_income+$royalty_2_income+$royalty_3_income+$royalty_4_income+$Repurchase_income+$Spill_Income+$Talent_Hunt_Income_1+$Talent_Hunt_Income_2+$joining_royalty_income;
             if ($totalincome>$max_capping) {
                 $totalincome=$max_capping;
             }
             $totalincome=$totalincome+$matching_repurchase_income;
             $tds=($totalincome*15)/100;
             $wallet=$wallet+($totalincome-$tds);
             $month_Date=$memdetail->month_Date;
             $month_income=$memdetail->month_income;
             $month_count=$memdetail->month_count;
             $f_wallet=$memdetail->f_wallet;
             $month_count=$month_count+1;
             if ($month_Date=="") {
                $month_Date=$todaydate;
             }
          
            if ($month_count==30) {

                if ($month_income>=50000) {

                    $f_wallet=$f_wallet+0;
                   
                }
                elseif ($month_income>=30000) {
                    $f_wallet=$f_wallet+3000;
                }
                elseif ($month_income>=10000) {
                    $f_wallet=$f_wallet+1000;
                }
                 elseif ($month_income>=5000) {
                    $f_wallet=$f_wallet+500;
                }
                $month_Date=$todaydate;
                $month_income=0;
                $month_count=0;
             }
             $Spill_Income=($totalincome*5)/100;
             $sponsor_id=$memdetail->sponsor_id;
             member::where('m_id',$sponsor_id)->increment('Spill_Income',$Spill_Income);
         
              $products = new closingstatement;
             $products->m_id = $memberid;
            $products->Total_income = $totalincome;
            $products->wallet_amount = $wallet_amount;
            $products->royalty_1_income  = $royalty_1_income;
             $products->royalty_2_income  = $royalty_2_income;

             $products->royalty_3_income = $royalty_3_income;
            $products->royalty_4_income  = $royalty_4_income;
          
            $products->Spill_Income = $Spill_Income;
            $products->Closing_Date = $todaydate;

            $products->Talent_Hunt_Income_1 = $Talent_Hunt_Income_1;
            $products->Talent_Hunt_Income_2 = $Talent_Hunt_Income_2;
              $products->joining_royalty_income = $joining_royalty_income;
              $products->Tds_Amount = $tds;


             $products->save();
            

            $wallet_amount=0;
            $royalty_1_income=0;
            $royalty_2_income=0;
             $royalty_3_income=0;
            $royalty_4_income=0;
            $Repurchase_income=0;
            $matching_repurchase_income=0;
             $Spill_Income=0;
             $Talent_Hunt_Income_1=0;
             $Talent_Hunt_Income_2=0;
             $joining_royalty_income=0;
             

            DB::table('member')
                        ->where('m_id',$memberid)
                        ->update(['Total_income' =>$totalincome,'wallet' =>$wallet,'month_Date' =>$month_Date,'month_income' =>$month_income,'month_count' =>$month_count,'f_wallet' =>$f_wallet,'wallet_amount' =>$wallet_amount,'royalty_1_income' =>$royalty_1_income,'royalty_2_income' =>$royalty_2_income,'royalty_3_income' =>$royalty_3_income,'royalty_4_income' =>$royalty_4_income,'Repurchase_income' =>$Repurchase_income,'matching_repurchase_income' =>$matching_repurchase_income,'Spill_Income' =>$Spill_Income,'Talent_Hunt_Income_1' =>$Talent_Hunt_Income_1,'Talent_Hunt_Income_2' =>$Talent_Hunt_Income_2,'joining_royalty_income' =>$joining_royalty_income
                       
                        ]);

           }



            DB::table('member')
                        ->where('id', 1)
                        ->update(['Talent_Hunt_Amount_1' =>0,'Talent_Hunt_Amount_2' =>0,'Talent_Hunt_Count_1' =>0,'Talent_Hunt_Count_2' =>0,'Daily_Turnover'=>0
                       
                        ]);
          
            
            echo 'Closing Successful';

    }


     public static function senduptolevelpvbv($placementid1,$packagebv1,$placement1){


     
       $details = member::where('m_id',$placementid1)->get();

         $placementid=$details[0]->placement_id;
          $placement=$details[0]->placement;
           $Left_BV=$details[0]->Left_BV;
          $Right_BV=$details[0]->Right_BV;
          $Total_Left_BV=$details[0]->Total_Left_BV;
          $Total_Right_Bv=$details[0]->Total_Right_Bv;
           $daily_caping=$details[0]->daily_caping;
            $daily_date=$details[0]->daily_date;
             $max_capping=$details[0]->max_capping;
            $wallet_amount=$details[0]->wallet_amount;
             $Left_Point=$details[0]->Left_Point;
              $Right_Point=$details[0]->Right_Point;

               $First_Royalty=$details[0]->First_Royalty;
            $Second_Royalty=$details[0]->Second_Royalty;
             $Third_Royalty=$details[0]->Third_Royalty;
              $Fourth_Royalty=$details[0]->Fourth_Royalty;

               $First_Royalty_Date=$details[0]->First_Royalty_Date;
            $Second_Royalty_Date=$details[0]->Second_Royalty_Date;
             $Third_Royalty_Date=$details[0]->Third_Royalty_Date;
              $Fourth_Royalty_Date=$details[0]->Fourth_Royalty_Date;


               $First_Royalty_BV_Left=$details[0]->First_Royalty_BV_Left;
            $Second_Royalty_BV_Left=$details[0]->Second_Royalty_BV_Left;
             $Third_Royalty_BV_Left=$details[0]->Third_Royalty_BV_Left;
              $Fourth_Royalty_BV_Left=$details[0]->Fourth_Royalty_BV_Left;


               $First_Royalty_BV_Right=$details[0]->First_Royalty_BV_Right;
            $Second_Royalty_BV_Right=$details[0]->Second_Royalty_BV_Right;
             $Third_Royalty_BV_Right=$details[0]->Third_Royalty_BV_Right;
              $Fourth_Royalty_BV_Right=$details[0]->Fourth_Royalty_BV_Right;

               $Left_Reward_Point=$details[0]->Left_Reward_Point;
              $Right_Reward_Point=$details[0]->Right_Reward_Point;


               $Reward_Income1=$details[0]->Reward_Income1;
              $Reward_Income2=$details[0]->Reward_Income2;
             $Reward_Income3=$details[0]->Reward_Income3;
            $Reward_Income4=$details[0]->Reward_Income4;
             $Reward_Income5=$details[0]->Reward_Income5;
              $Reward_Income6=$details[0]->Reward_Income6;
             $Reward_Income7=$details[0]->Reward_Income7;
            $Reward_Income8=$details[0]->Reward_Income8;
             $Reward_Income9=$details[0]->Reward_Income9;
              $Reward_Income10=$details[0]->Reward_Income10;
              $Reward_Income11=$details[0]->Reward_Income11;
              $Reward_Income12=$details[0]->Reward_Income12;

          $today=date("Y-m-d");

     if ($details[0]->m_status=="Active") {
         
      if ($daily_date==$today) {
         
           if ($placement1=="Left") {

         $Left_BV=$Left_BV+$packagebv1;
        
     }
      if ($placement1=="Right") {

         $Right_BV=$Right_BV+$packagebv1;
        
     }

      }
      else{
      $daily_date=$today;


       if ($placement1=="Left") {

         $Left_BV=$packagebv1;
        
     }
      if ($placement1=="Right") {

         $Right_BV=$packagebv1;
        
     }


      }
    
   

     $leftpoint=0;
      $rightpoint=0;

      $today=date("Y-m-d");
      if ($daily_date==$today) {

         if ($daily_caping<$max_capping) {
            
            if ($Left_BV>=4800 && $Right_BV>=4800 ) {

                $daily_caping=$daily_caping+4000;
                if ($daily_caping<=$max_capping) {

                    $wallet_amount=$wallet_amount+4000;
                    $Left_Point=$Left_Point+4;
                     $Right_Point=$Right_Point+4;
                     $Left_BV=$Left_BV-4800;
                      $Right_BV=$Right_BV-4800;
                      $leftpoint=$leftpoint+4;
                      $rightpoint=$rightpoint+4;

                   
                }
                else{


                    $difference=$daily_caping-$max_capping;
                    $daily_caping=$daily_caping-$difference;
                    $wallet_amount=$wallet_amount+(4000-$difference);
                     $Left_Point=$Left_Point+4;
                     $Right_Point=$Right_Point+4;
                      $Left_BV=$Left_BV-4800;
                      $Right_BV=$Right_BV-4800;

                       $leftpoint=$leftpoint+4;
                      $rightpoint=$rightpoint+4;

                }

            }

            elseif ($Left_BV>=2400 && $Right_BV>=2400 ) {

                $daily_caping=$daily_caping+2000;
                if ($daily_caping<=$max_capping) {

                    $wallet_amount=$wallet_amount+2000;
                    $Left_Point=$Left_Point+2;
                     $Right_Point=$Right_Point+2;
                     $Left_BV=$Left_BV-2400;
                      $Right_BV=$Right_BV-2400;
                      $leftpoint=$leftpoint+2;
                      $rightpoint=$rightpoint+2;

                   
                }
                else{

                    $difference=$daily_caping-$max_capping;
                    $daily_caping=$daily_caping-$difference;
                    $wallet_amount=$wallet_amount+(2000-$difference);
                     $Left_Point=$Left_Point+2;
                     $Right_Point=$Right_Point+2;
                      $Left_BV=$Left_BV-2400;
                      $Right_BV=$Right_BV-2400;

                       $leftpoint=$leftpoint+2;
                      $rightpoint=$rightpoint+2;

                }

                
            }

            elseif ($Left_BV>=1200 && $Right_BV>=1200 ) {

                $daily_caping=$daily_caping+1000;
                if ($daily_caping<=$max_capping) {

                    $wallet_amount=$wallet_amount+1000;
                    $Left_Point=$Left_Point+1;
                     $Right_Point=$Right_Point+1;
                     $Left_BV=$Left_BV-1200;
                      $Right_BV=$Right_BV-1200;
                      $leftpoint=$leftpoint+1;
                      $rightpoint=$rightpoint+1;

                   
                }
                else{


                    $difference=$daily_caping-$max_capping;
                    $daily_caping=$daily_caping-$difference;
                    $wallet_amount=$wallet_amount+(1000-$difference);
                     $Left_Point=$Left_Point+1;
                     $Right_Point=$Right_Point+1;
                      $Left_BV=$Left_BV-1200;
                      $Right_BV=$Right_BV-1200;

                       $leftpoint=$leftpoint+1;
                      $rightpoint=$rightpoint+1;

                }



                
            }

            elseif ($Left_BV>=600 && $Right_BV>=600 ) {

                $daily_caping=$daily_caping+500;
                if ($daily_caping<=$max_capping) {

                    $wallet_amount=$wallet_amount+500;
                    $Left_Point=$Left_Point+.5;
                     $Right_Point=$Right_Point+.5;
                     $Left_BV=$Left_BV-600;
                      $Right_BV=$Right_BV-600;
                      $leftpoint=$leftpoint+.5;
                      $rightpoint=$rightpoint+.5;

                   
                }
                else{


                    $difference=$daily_caping-$max_capping;
                    $daily_caping=$daily_caping-$difference;
                    $wallet_amount=$wallet_amount+(500-$difference);
                     $Left_Point=$Left_Point+.5;
                     $Right_Point=$Right_Point+.5;
                      $Left_BV=$Left_BV-.5;
                      $Right_BV=$Right_BV-.5;

                       $leftpoint=$leftpoint+.5;
                      $rightpoint=$rightpoint+.5;

                }



                
            }

            elseif ($Left_BV>=300 && $Right_BV>=300 ) {

                $daily_caping=$daily_caping+250;
                if ($daily_caping<=$max_capping) {

                    $wallet_amount=$wallet_amount+250;
                    $Left_Point=$Left_Point+.25;
                     $Right_Point=$Right_Point+.25;
                     $Left_BV=$Left_BV-300;
                      $Right_BV=$Right_BV-300;
                      $leftpoint=$leftpoint+.25;
                      $rightpoint=$rightpoint+.25;

                   
                }
                else{


                    $difference=$daily_caping-$max_capping;
                    $daily_caping=$daily_caping-$difference;
                    $wallet_amount=$wallet_amount+(250-$difference);
                     $Left_Point=$Left_Point+.25;
                     $Right_Point=$Right_Point+.25;
                      $Left_BV=$Left_BV-.25;
                      $Right_BV=$Right_BV-.25;

                       $leftpoint=$leftpoint+.25;
                      $rightpoint=$rightpoint+.25;

                }

                
            }

         }//End of line 714 
         else{

                 if ($Left_BV>=4800 && $Right_BV>=4800 ) {

                    $Left_Point=$Left_Point+4;
                     $Right_Point=$Right_Point+4;
                     $Left_BV=$Left_BV-4800;
                      $Right_BV=$Right_BV-4800;
                      $leftpoint=$leftpoint+4;
                      $rightpoint=$rightpoint+4;

            }

            elseif ($Left_BV>=2400 && $Right_BV>=2400 ) {

                    $Left_Point=$Left_Point+2;
                     $Right_Point=$Right_Point+2;
                     $Left_BV=$Left_BV-2400;
                      $Right_BV=$Right_BV-2400;
                      $leftpoint=$leftpoint+2;
                      $rightpoint=$rightpoint+2;

            }

            elseif ($Left_BV>=1200 && $Right_BV>=1200 ) {

                    $Left_Point=$Left_Point+1;
                     $Right_Point=$Right_Point+1;
                     $Left_BV=$Left_BV-1200;
                      $Right_BV=$Right_BV-1200;
                      $leftpoint=$leftpoint+1;
                      $rightpoint=$rightpoint+1;

            }

            elseif ($Left_BV>=600 && $Right_BV>=600 ) {

                    $Left_Point=$Left_Point+.5;
                     $Right_Point=$Right_Point+.5;
                     $Left_BV=$Left_BV-600;
                      $Right_BV=$Right_BV-600;
                      $leftpoint=$leftpoint+.5;
                      $rightpoint=$rightpoint+.5;

            }

            elseif ($Left_BV>=300 && $Right_BV>=300 ) {

               
                    $Left_Point=$Left_Point+.25;
                     $Right_Point=$Right_Point+.25;
                     $Left_BV=$Left_BV-300;
                      $Right_BV=$Right_BV-300;
                      $leftpoint=$leftpoint+.25;
                      $rightpoint=$rightpoint+.25;

            }  

         }
        

      }//End of line 714 


   
                  if ($First_Royalty==1) {

                $firstroyaltydetails=firstroyalty::where('member_id',$placementid1)->get();
                if ($today>=$First_Royalty_Date) {
                   
                
                $comparedate= date("Y-m-d", strtotime("$First_Royalty_Date +7 days"));
                 if ($today<$comparedate) {

                   $First_Royalty_BV_Left=$First_Royalty_BV_Left+$leftpoint;
                   $First_Royalty_BV_Right=$First_Royalty_BV_Right+$rightpoint;


                   if ($First_Royalty_BV_Right>=1 && $First_Royalty_BV_Left>=1) {
                    $First_Royalty_BV_Right=0;
                    $First_Royalty_BV_Left=0;
                     $startnewdate =date("Y-m-d", strtotime("$firstroyaltydetails[0]->End_Date +1 days"));
                     $endnewdate=date("Y-m-d", strtotime("$comparedate +6 days"));
                     $newmaxcount=$firstroyaltydetails[0]->Max_Count +7;
                    if ($comparedate==$startnewdate) {
                        
                        DB::table('first_royalty')
                        ->where('member_id', $placementid1)
                        ->update(['End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);
                    }
                    else{
                        $newmaxcount=7;
                        $status='Pending';

                         DB::table('first_royalty')
                        ->where('member_id', $placementid1)
                        ->update(['Start_Date' =>$comparedate,'status' =>$newmaxcount,'End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);


                    }

                       
                   }

                    
                 }//end of line 1075
                 else{
                    
                      $date1= strtotime($comparedate);
                       $date2=strtotime($today);
                      $diff=(int)(($date2 - $date1)/86400);
                    $remainder=($diff)%7;

                    $First_Royalty_Date=date("Y-m-d", strtotime("$today -$remainder days"));
                    $comparedate= date("Y-m-d", strtotime("$First_Royalty_Date +7 days"));
                 if ($today<$comparedate) {
                    $First_Royalty_BV_Left=$leftpoint;
                   $First_Royalty_BV_Right=$rightpoint;
                 


                   if ($First_Royalty_BV_Right>=1 && $First_Royalty_BV_Left>=1) {
                     $Third_Royalty_BV_Left=0;
                   $Third_Royalty_BV_Right=0;
                     $startnewdate =date("Y-m-d", strtotime("$firstroyaltydetails[0]->End_Date +1 days"));
                     $endnewdate=date("Y-m-d", strtotime("$comparedate +6 days"));
                     $newmaxcount=$firstroyaltydetails[0]->Max_Count +7;
                    if ($comparedate==$startnewdate) {
                        
                        DB::table('first_royalty')
                        ->where('member_id', $placementid1)
                        ->update(['End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);
                    }
                    else{
                        $newmaxcount=7;
                        $status='Pending';

                         DB::table('first_royalty')
                        ->where('member_id', $placementid1)
                        ->update(['Start_Date' =>$comparedate,'status' =>$newmaxcount,'End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);


                    }

                       
                   }

                    
                 }


                 }

             }

                  
              }

             if ($Second_Royalty==1) {

                $firstroyaltydetails=secondroyalty::where('member_id',$placementid1)->get();
                if ($today>=$Second_Royalty_Date) {
                   
                
                $comparedate= date("Y-m-d", strtotime("$Second_Royalty_Date +7 days"));
                 if ($today<$comparedate) {

                   $Second_Royalty_BV_Left=$Second_Royalty_BV_Left+$leftpoint;
                   $Second_Royalty_BV_Right=$Second_Royalty_BV_Right+$rightpoint;


                   if ($Second_Royalty_BV_Right>=1 && $Second_Royalty_BV_Left>=1) {
                    $Second_Royalty_BV_Right=0;
                    $Second_Royalty_BV_Left=0;
                     $startnewdate =date("Y-m-d", strtotime("$firstroyaltydetails[0]->End_Date +1 days"));
                     $endnewdate=date("Y-m-d", strtotime("$comparedate +6 days"));
                     $newmaxcount=$firstroyaltydetails[0]->Max_Count +7;
                    if ($comparedate==$startnewdate) {
                        
                        DB::table('first_royalty')
                        ->where('member_id', $placementid1)
                        ->update(['End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);
                    }
                    else{
                        $newmaxcount=7;
                        $status='Pending';

                         DB::table('first_royalty')
                        ->where('member_id', $placementid1)
                        ->update(['Start_Date' =>$comparedate,'status' =>$newmaxcount,'End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);


                    }

                       
                   }

                    
                 }//end of line 1075
                 else{

                     $date1= strtotime($comparedate);
                       $date2=strtotime($today);
                      $diff=(int)(($date2 - $date1)/86400);
                    $remainder=($diff)%7;

                    $Second_Royalty_Date=date("Y-m-d", strtotime("$today -$remainder days"));
                    $comparedate= date("Y-m-d", strtotime("$Second_Royalty_Date +7 days"));
                 if ($today<$comparedate) {
                    $Second_Royalty_BV_Left=$leftpoint;
                   $First_Royalty_BV_Right=$rightpoint;
                 


                   if ($First_Royalty_BV_Right>=1 && $Second_Royalty_BV_Left>=1) {
                    $Third_Royalty_BV_Left=0;
                   $Third_Royalty_BV_Right=0;
                     $startnewdate =date("Y-m-d", strtotime("$firstroyaltydetails[0]->End_Date +1 days"));
                     $endnewdate=date("Y-m-d", strtotime("$comparedate +6 days"));
                     $newmaxcount=$firstroyaltydetails[0]->Max_Count +7;
                    if ($comparedate==$startnewdate) {
                        
                        DB::table('first_royalty')
                        ->where('member_id', $placementid1)
                        ->update(['End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);
                    }
                    else{
                        $newmaxcount=7;
                        $status='Pending';

                         DB::table('first_royalty')
                        ->where('member_id', $placementid1)
                        ->update(['Start_Date' =>$comparedate,'status' =>$newmaxcount,'End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);


                    }

                       
                   }

                    
                 }


                 }

             }

                  
              }

        if ($Third_Royalty==1) {

                $firstroyaltydetails=thirdroyalty::where('member_id',$placementid1)->get();
                if ($today>=$Third_Royalty_Date) {
                   
                
                $comparedate= date("Y-m-d", strtotime("$Third_Royalty_Date +7 days"));
                 if ($today<$comparedate) {

                   $Third_Royalty_BV_Left=$Third_Royalty_BV_Left+$leftpoint;
                   $Third_Royalty_BV_Right=$Third_Royalty_BV_Right+$rightpoint;


                   if ($Third_Royalty_BV_Right>=1 && $Third_Royalty_BV_Left>=1) {
                    $Third_Royalty_BV_Right=0;
                    $Third_Royalty_BV_Left=0;
                     $startnewdate =date("Y-m-d", strtotime("$firstroyaltydetails[0]->End_Date +1 days"));
                     $endnewdate=date("Y-m-d", strtotime("$comparedate +6 days"));
                     $newmaxcount=$firstroyaltydetails[0]->Max_Count +7;
                    if ($comparedate==$startnewdate) {
                        
                        DB::table('third_royalty')
                        ->where('member_id', $placementid1)
                        ->update(['End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);
                    }
                    else{
                        $newmaxcount=7;
                        $status='Pending';

                         DB::table('third_royalty')
                        ->where('member_id', $placementid1)
                        ->update(['Start_Date' =>$comparedate,'status' =>$newmaxcount,'End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);


                    }

                       
                   }

                    
                 }//end of line 1075
                 else{

                    $date1= strtotime($comparedate);
                       $date2=strtotime($today);
                      $diff=(int)(($date2 - $date1)/86400);
                    $remainder=($diff)%7;

                    $Third_Royalty_Date=date("Y-m-d", strtotime("$today -$remainder days"));
                    $comparedate= date("Y-m-d", strtotime("$Third_Royalty_Date +7 days"));
                 if ($today<$comparedate) {
                    $Third_Royalty_BV_Left=$leftpoint;
                   $Third_Royalty_BV_Right=$rightpoint;
                 


                   if ($Third_Royalty_BV_Right>=1 && $Third_Royalty_BV_Left>=1) {
                     $Third_Royalty_BV_Left=0;
                   $Third_Royalty_BV_Right=0;
                     $startnewdate =date("Y-m-d", strtotime("$firstroyaltydetails[0]->End_Date +1 days"));
                     $endnewdate=date("Y-m-d", strtotime("$comparedate +6 days"));
                     $newmaxcount=$firstroyaltydetails[0]->Max_Count +7;
                    if ($comparedate==$startnewdate) {
                        
                        DB::table('third_royalty')
                        ->where('member_id', $placementid1)
                        ->update(['End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);
                    }
                    else{
                        $newmaxcount=7;
                        $status='Pending';

                         DB::table('third_royalty')
                        ->where('member_id', $placementid1)
                        ->update(['Start_Date' =>$comparedate,'status' =>$newmaxcount,'End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);


                    }

                       
                   }

                    
                 }


                 }

             }

                  
              }

                      if ($Fourth_Royalty==1) {

                $firstroyaltydetails=fourthroyalty::where('member_id',$placementid1)->get();
                if ($today>=$Fourth_Royalty_Date) {
                   
                
                $comparedate= date("Y-m-d", strtotime("$Fourth_Royalty_Date +7 days"));
                 if ($today<$comparedate) {

                   $Fourth_Royalty_BV_Left=$Fourth_Royalty_BV_Left+$leftpoint;
                   $Fourth_Royalty_BV_Right=$Fourth_Royalty_BV_Right+$rightpoint;


                   if ($Fourth_Royalty_BV_Right>=1 && $Fourth_Royalty_BV_Left>=1) {
                    $Fourth_Royalty_BV_Right=0;
                    $Fourth_Royalty_BV_Left=0;
                     $startnewdate =date("Y-m-d", strtotime("$firstroyaltydetails[0]->End_Date +1 days"));
                     $endnewdate=date("Y-m-d", strtotime("$comparedate +6 days"));
                     $newmaxcount=$firstroyaltydetails[0]->Max_Count +7;
                    if ($comparedate==$startnewdate) {
                        
                        DB::table('fourth_royalty')
                        ->where('member_id', $placementid1)
                        ->update(['End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);
                    }
                    else{
                        $newmaxcount=7;
                        $status='Pending';

                         DB::table('fourth_royalty')
                        ->where('member_id', $placementid1)
                        ->update(['Start_Date' =>$comparedate,'status' =>$newmaxcount,'End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);


                    }

                       
                   }

                    
                 }//end of line 1075
                 else{

                     $date1= strtotime($comparedate);
                       $date2=strtotime($today);
                      $diff=(int)(($date2 - $date1)/86400);
                    $remainder=($diff)%7;

                    $Fourth_Royalty_Date=date("Y-m-d", strtotime("$today -$remainder days"));
                    $comparedate= date("Y-m-d", strtotime("$Fourth_Royalty_Date +7 days"));
                 if ($today<$comparedate) {
                    $Fourth_Royalty_BV_Left=$leftpoint;
                   $Fourth_Royalty_BV_Right=$rightpoint;
                 


                   if ($Fourth_Royalty_BV_Right>=64 && $Fourth_Royalty_BV_Left>=64) {
                     $Fourth_Royalty_BV_Left=0;
                   $Fourth_Royalty_BV_Right=0;
                     $startnewdate =date("Y-m-d", strtotime("$firstroyaltydetails[0]->End_Date +1 days"));
                     $endnewdate=date("Y-m-d", strtotime("$comparedate +6 days"));
                     $newmaxcount=$firstroyaltydetails[0]->Max_Count +7;
                    if ($comparedate==$startnewdate) {
                        
                        DB::table('fourth_royalty')
                        ->where('member_id', $placementid1)
                        ->update(['End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);
                    }
                    else{
                        $newmaxcount=7;
                        $status='Pending';

                         DB::table('fourth_royalty')
                        ->where('member_id', $placementid1)
                        ->update(['Start_Date' =>$comparedate,'status' =>$newmaxcount,'End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);


                    }

                       
                   }

                    
                 }


                 }

             }

                  
              }
              if ($Second_Royalty!=1) {
                 if ($Left_Point>=90 && $Right_Point>=90) {

                     $products = new secondroyalty;
             $products->member_id = $placementid1;
            $products->status = "Pending";
            $products->Start_Date = $today;
            $enddate=date("Y-m-d", strtotime("$today +6 days"));
            $products->End_Date  = $enddate;
             $products->Count  = 0;

             $products->Max_Count = 7;
         
          
          
             $products->save();
             $Second_Royalty=1;
                 
              }
              }

               if ($Third_Royalty!=1) {
                 if ($Left_Point>=1300 && $Right_Point>=1300) {

                     $products = new thirdroyalty;
             $products->member_id = $placementid1;
            $products->status = "Pending";
            $products->Start_Date = $today;
            $enddate=date("Y-m-d", strtotime("$today +6 days"));
            $products->End_Date  = $enddate;
             $products->Count  = 0;

             $products->Max_Count = 7;
         
          
          
             $products->save();
             $Third_Royalty=1;
                 
              }
              }



               if ($Fourth_Royalty!=1) {
                 if ($Left_Point>=2500 && $Right_Point>=2500) {

                     $products = new fourthroyalty;
             $products->member_id = $placementid1;
            $products->status = "Pending";
            $products->Start_Date = $today;
            $enddate=date("Y-m-d", strtotime("$today +6 days"));
            $products->End_Date  = $enddate;
             $products->Count  = 0;

             $products->Max_Count = 7;
          
          
          
             $products->save();
             $Fourth_Royalty=1;
                 
              }
              }

             $Left_Reward_Point=$Left_Reward_Point+$leftpoint;
             $Right_Reward_Point=$Right_Reward_Point+$rightpoint;

              if ($Reward_Income1==1) {
                 
              }
              else{

                if ($Left_Reward_Point>=5 && $Right_Reward_Point>=5) {

                    $Reward_Income1=1;


                     $products = new memberreward;
             $products->member_id = $placementid1;
            $products->status = "Pending";
            $products->Alloted_Date = $today;
           
            $products->reward_id  = 1;
           
             $products->save();
             $Left_Reward_Point=$Left_Reward_Point-5;
             $Right_Reward_Point=$Right_Reward_Point-5;

                    
                }



              }

               if ($Reward_Income2==1) {
                 
              }
              else{

                if ($Left_Reward_Point>=15 && $Right_Reward_Point>=15) {

                    $Reward_Income2=1;


                     $products = new memberreward;
             $products->member_id = $placementid1;
            $products->status = "Pending";
            $products->Alloted_Date = $today;
           
            $products->reward_id  = 2;
           
             $products->save();
             $Left_Reward_Point=$Left_Reward_Point-15;
             $Right_Reward_Point=$Right_Reward_Point-15;

                    
                }



              }

               if ($Reward_Income3==1) {
                 
              }
              else{

                if ($Left_Reward_Point>=30 && $Right_Reward_Point>=30) {

                    $Reward_Income3=1;


                     $products = new memberreward;
             $products->member_id = $placementid1;
            $products->status = "Pending";
            $products->Alloted_Date = $today;
           
            $products->reward_id  = 3;
           
             $products->save();
             $Left_Reward_Point=$Left_Reward_Point-30;
             $Right_Reward_Point=$Right_Reward_Point-30;

                    
                }



              }


              if ($Reward_Income4==1) {
                 
              }
              else{

                if ($Left_Reward_Point>=90 && $Right_Reward_Point>=90) {

                    $Reward_Income4=1;


                     $products = new memberreward;
             $products->member_id = $placementid1;
            $products->status = "Pending";
            $products->Alloted_Date = $today;
           
            $products->reward_id  = 4;
           
             $products->save();
             $Left_Reward_Point=$Left_Reward_Point-90;
             $Right_Reward_Point=$Right_Reward_Point-90;

                    
                }



              }


               if ($Reward_Income5==1) {
                 
              }
              else{

                if ($Left_Reward_Point>=300 && $Right_Reward_Point>=300) {

                    $Reward_Income5=1;


                     $products = new memberreward;
             $products->member_id = $placementid1;
            $products->status = "Pending";
            $products->Alloted_Date = $today;
           
            $products->reward_id  = 5;
           
             $products->save();
             $Left_Reward_Point=$Left_Reward_Point-300;
             $Right_Reward_Point=$Right_Reward_Point-300;

                    
                }



              }

               if ($Reward_Income6==1) {
                 
              }
              else{

                if ($Left_Reward_Point>=1300 && $Right_Reward_Point>=1300) {

                    $Reward_Income6=1;


                     $products = new memberreward;
             $products->member_id = $placementid1;
            $products->status = "Pending";
            $products->Alloted_Date = $today;
           
            $products->reward_id  = 6;
           
             $products->save();
             $Left_Reward_Point=$Left_Reward_Point-1300;
             $Right_Reward_Point=$Right_Reward_Point-1300;

                    
                }



              }

               if ($Reward_Income7==1) {
                 
              }
              else{

                if ($Left_Reward_Point>=2500 && $Right_Reward_Point>=2500) {

                    $Reward_Income7=1;


                     $products = new memberreward;
             $products->member_id = $placementid1;
            $products->status = "Pending";
            $products->Alloted_Date = $today;
           
            $products->reward_id  = 7;
           
             $products->save();
             $Left_Reward_Point=$Left_Reward_Point-2500;
             $Right_Reward_Point=$Right_Reward_Point-2500;

                    
                }



              }

               if ($Reward_Income8==1) {
                 
              }
              else{

                if ($Left_Reward_Point>=25000 && $Right_Reward_Point>=25000) {

                    $Reward_Income8=1;


                     $products = new memberreward;
             $products->member_id = $placementid1;
            $products->status = "Pending";
            $products->Alloted_Date = $today;
           
            $products->reward_id  = 8;
           
             $products->save();
             $Left_Reward_Point=$Left_Reward_Point-25000;
             $Right_Reward_Point=$Right_Reward_Point-25000;

                    
                }



              }

              if ($Reward_Income9==1) {
                 
              }
              else{

                if ($Left_Reward_Point>=50000 && $Right_Reward_Point>=50000) {

                    $Reward_Income9=1;


                     $products = new memberreward;
             $products->member_id = $placementid1;
            $products->status = "Pending";
            $products->Alloted_Date = $today;
           
            $products->reward_id  = 9;
           
             $products->save();
             $Left_Reward_Point=$Left_Reward_Point-50000;
             $Right_Reward_Point=$Right_Reward_Point-50000;

                    
                }



              }

               if ($Reward_Income10==1) {
                 
              }
              else{

                if ($Left_Reward_Point>=100000 && $Right_Reward_Point>=100000) {

                    $Reward_Income10=1;


                     $products = new memberreward;
             $products->member_id = $placementid1;
            $products->status = "Pending";
            $products->Alloted_Date = $today;
           
            $products->reward_id  = 10;
           
             $products->save();
             $Left_Reward_Point=$Left_Reward_Point-100000;
             $Right_Reward_Point=$Right_Reward_Point-100000;

                    
                }



              }

               if ($Reward_Income11==1) {
                 
              }
              else{

                if ($Left_Reward_Point>=500000 && $Right_Reward_Point>=500000) {

                    $Reward_Income11=1;


                     $products = new memberreward;
             $products->member_id = $placementid1;
            $products->status = "Pending";
            $products->Alloted_Date = $today;
           
            $products->reward_id  = 11;
           
             $products->save();
             $Left_Reward_Point=$Left_Reward_Point-500000;
             $Right_Reward_Point=$Right_Reward_Point-500000;

                    
                }



              }

               if ($Reward_Income12==1) {
                 
              }
              else{

                if ($Left_Reward_Point>=2500000 && $Right_Reward_Point>=2500000) {

                    $Reward_Income12=1;


                     $products = new memberreward;
             $products->member_id = $placementid1;
            $products->status = "Pending";
            $products->Alloted_Date = $today;
           
            $products->reward_id  = 12;
           
             $products->save();
             $Left_Reward_Point=$Left_Reward_Point-2500000;
             $Right_Reward_Point=$Right_Reward_Point-2500000;

                    
                }



              }

 }

                     DB::table('member')
                        ->where('m_id', $placementid1)
                        ->update(['Left_BV' =>$Left_BV,'Right_BV' =>$Right_BV,'Total_Left_BV' =>$Total_Left_BV,'Total_Right_Bv' =>$Total_Right_Bv,'daily_caping' =>$daily_caping,'daily_date' =>$daily_date,'max_capping' =>$max_capping,'wallet_amount' =>$wallet_amount,'Left_Point' =>$Left_Point,'Right_Point' =>$Right_Point,'First_Royalty' =>$First_Royalty,'Second_Royalty' =>$Second_Royalty,'Third_Royalty' =>$Third_Royalty,'Fourth_Royalty' =>$Fourth_Royalty,'First_Royalty_Date' =>$First_Royalty_Date,'Second_Royalty_Date' =>$Second_Royalty_Date,'Third_Royalty_Date' =>$Third_Royalty_Date,'Fourth_Royalty_Date' =>$Fourth_Royalty_Date,'First_Royalty_BV_Left' =>$First_Royalty_BV_Left,'Second_Royalty_BV_Left' =>$Second_Royalty_BV_Left,'Third_Royalty_BV_Left' =>$Third_Royalty_BV_Left,'Fourth_Royalty_BV_Left' =>$Fourth_Royalty_BV_Left,'First_Royalty_BV_Right' =>$First_Royalty_BV_Right,'Second_Royalty_BV_Right' =>$Second_Royalty_BV_Right,'Third_Royalty_BV_Right' =>$Third_Royalty_BV_Right,'Fourth_Royalty_BV_Right' =>$Fourth_Royalty_BV_Right,'Left_Reward_Point' =>$Left_Reward_Point,'Right_Reward_Point' =>$Right_Reward_Point,'Reward_Income1' =>$Reward_Income1,'Reward_Income2' =>$Reward_Income2,'Reward_Income3' =>$Reward_Income3,'Reward_Income4' =>$Reward_Income4,'Reward_Income5' =>$Reward_Income5,'Reward_Income6' =>$Reward_Income6,'Reward_Income7' =>$Reward_Income7,'Reward_Income8' =>$Reward_Income8,'Reward_Income9' =>$Reward_Income9,'Reward_Income10' =>$Reward_Income10,'Reward_Income11' =>$Reward_Income11,'Reward_Income12' =>$Reward_Income12
                       
                        ]);
      if ($placementid=="") {
               
            }
            else{
               
        self::senduptolevelpvbv($placementid,$packagebv1,$placement);
          }

     
     
   
 }


public function activatemember(Request $request,$id) {
        
           $details = member::where('m_id',$id)->get();
          $today=date("Y-m-d");
          $sponsor_placement=$details[0]->sponsor_placement;
         $packagebv=$details[0]->Package_BV;
         $sponsorid=$details[0]->sponsor_id;
         $placementid=$details[0]->placement_id;
          $placement=$details[0]->placement;
          $package=$details[0]->package;
         $status="Active";

          if ($package==7) {
             
            $products = new joiningroyalty;
            $products->member_id = $id;
            $products->status = "Pending";
            $products->Start_Date = $today;
            $enddate=date("Y-m-d", strtotime("$today +364 days"));
            $products->End_Date  = $enddate;
            $products->Count  = 0;

             $products->Max_Count = 365;
         
          
          
             $products->save();
            
                 
              }
              

         if ($sponsor_placement=="Left") {

            $direct_left_BV=$packagebv;
           
         }

          if ($sponsor_placement=="Right") {

            $direct_right_BV=$packagebv;
           
         }



        DB::table('member')
                ->where('m_id', $id)
                ->update(['m_status' =>$status
               
                ]);

    if ($placementid=="") {
               
            }
            else{
               
        self::senduptolevelpvbv($placementid,$packagebv,$placement);
          }
           


        $detailssponsor = member::where('m_id',$sponsorid)->get();
        $leftdirectbv=$detailssponsor[0]->Left_Direct_BV;
          $rightdirectbv=$detailssponsor[0]->Right_Direct_BV;
           $totaldirectbv=$detailssponsor[0]->Total_Direct_BV;
           $sponsorstatus=$detailssponsor[0]->m_status;
           $totalleftdirectbv=$detailssponsor[0]->Total_Left_Direct_BV;
             $totalrightdirectbv=$detailssponsor[0]->Total_Right_Direct_BV;
             
               $First_Royalty=$detailssponsor[0]->First_Royalty;
                 $Second_Royalty=$detailssponsor[0]->Second_Royalty;
                  $Third_Royalty=$detailssponsor[0]->Third_Royalty;
                 $Fourth_Royalty=$detailssponsor[0]->Fourth_Royalty;

                 $First_Royalty_Date=$detailssponsor[0]->First_Royalty_Date;
                 $Second_Royalty_Date=$detailssponsor[0]->Second_Royalty_Date;
                  $Third_Royalty_Date=$detailssponsor[0]->Third_Royalty_Date;
                 $Fourth_Royalty_Date=$detailssponsor[0]->Fourth_Royalty_Date;

                 $First_Royalty_Direct=$detailssponsor[0]->First_Royalty_Direct;
                 $Second_royalty_Direct=$detailssponsor[0]->Second_royalty_Direct;
                 $Third_Royalty_Direct=$detailssponsor[0]->Third_Royalty_Direct;
                 $Fourth_Royalty_Direct=$detailssponsor[0]->Fourth_Royalty_Direct;


              $directbv=$packagebv/1200;

           if ($sponsor_placement=="Left") {

             $leftdirectbv=$leftdirectbv+$direct_left_BV;
              $totaldirectbv=$totaldirectbv+ $direct_left_BV;
               $totalleftdirectbv=$totalleftdirectbv+ $direct_left_BV;
           }

             if ($sponsor_placement=="Right") {

             $rightdirectbv=$rightdirectbv+$direct_right_BV;
             $totaldirectbv=$totaldirectbv+ $direct_right_BV;
              $totalrightdirectbv=$totalrightdirectbv+ $direct_right_BV;
            
               
           }

             if ($First_Royalty==1) {

                $firstroyaltydetails=firstroyalty::where('member_id',$sponsorid)->get();
                if ($today>=$First_Royalty_Date) {
                   
                
                $comparedate= date("Y-m-d", strtotime("$First_Royalty_Date +7 days"));
                 if ($today<$comparedate) {
                   $First_Royalty_Direct=$First_Royalty_Direct+$directbv;


                   if ($First_Royalty_Direct>=1) {
                    $First_Royalty_Direct=0;
                     $startnewdate =date("Y-m-d", strtotime("$firstroyaltydetails[0]->End_Date +1 days"));
                     $endnewdate=date("Y-m-d", strtotime("$comparedate +6 days"));
                     $newmaxcount=$firstroyaltydetails[0]->Max_Count +7;
                    if ($comparedate==$startnewdate) {
                        
                        DB::table('first_royalty')
                        ->where('member_id', $sponsorid)
                        ->update(['End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);
                    }
                    else{
                        $newmaxcount=7;
                        $status='Pending';

                         DB::table('first_royalty')
                        ->where('member_id', $sponsorid)
                        ->update(['Start_Date' =>$comparedate,'status' =>$newmaxcount,'End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);


                    }

                       
                   }

                    
                 }//end of line 1075
                 else{

                    $remainder=($today-$comparedate)%7;

                    $First_Royalty_Date=date("Y-m-d", strtotime("$today -$remainder days"));
                                    $comparedate= date("Y-m-d", strtotime("$First_Royalty_Date +7 days"));
                 if ($today<$comparedate) {
                   $First_Royalty_Direct=$directbv;


                   if ($First_Royalty_Direct>=1) {
                    $First_Royalty_Direct=0;
                     $startnewdate =date("Y-m-d", strtotime("$firstroyaltydetails[0]->End_Date +1 days"));
                     $endnewdate=date("Y-m-d", strtotime("$comparedate +6 days"));
                     $newmaxcount=$firstroyaltydetails[0]->Max_Count +7;
                    if ($comparedate==$startnewdate) {
                        
                        DB::table('first_royalty')
                        ->where('member_id', $sponsorid)
                        ->update(['End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);
                    }
                    else{
                        $newmaxcount=7;
                        $status='Pending';

                         DB::table('first_royalty')
                        ->where('member_id', $sponsorid)
                        ->update(['Start_Date' =>$comparedate,'status' =>$newmaxcount,'End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);


                    }

                       
                   }

                    
                 }


                 }

             }

                  
              }

               if ($Second_Royalty==1) {

                $firstroyaltydetails=secondroyalty::where('member_id',$sponsorid)->get();
                if ($today>=$Second_Royalty_Date) {
                   
                
                $comparedate= date("Y-m-d", strtotime("$Second_Royalty_Date +7 days"));
                 if ($today<$comparedate) {
                   $Second_royalty_Direct=$Second_royalty_Direct+$directbv;


                   if ($Second_royalty_Direct>=4) {
                    $Second_royalty_Direct=0;
                     $startnewdate =date("Y-m-d", strtotime("$firstroyaltydetails[0]->End_Date +1 days"));
                     $endnewdate=date("Y-m-d", strtotime("$comparedate +6 days"));
                     $newmaxcount=$firstroyaltydetails[0]->Max_Count +7;
                    if ($comparedate==$startnewdate) {
                        
                        DB::table('second_royalty')
                        ->where('member_id', $sponsorid)
                        ->update(['End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);
                    }
                    else{
                        $newmaxcount=7;
                        $status='Pending';

                         DB::table('second_royalty')
                        ->where('member_id', $sponsorid)
                        ->update(['Start_Date' =>$comparedate,'status' =>$newmaxcount,'End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);


                    }

                       
                   }

                    
                 }//end of line 1075
                 else{

                    $remainder=($today-$comparedate)%7;

                    $Second_Royalty_Date=date("Y-m-d", strtotime("$today -$remainder days"));
                                    $comparedate= date("Y-m-d", strtotime("$Second_Royalty_Date +7 days"));
                 if ($today<$comparedate) {
                   $Second_royalty_Direct=$directbv;


                   if ($Second_royalty_Direct>=4) {
                    $Second_royalty_Direct=0;
                     $startnewdate =date("Y-m-d", strtotime("$firstroyaltydetails[0]->End_Date +1 days"));
                     $endnewdate=date("Y-m-d", strtotime("$comparedate +6 days"));
                     $newmaxcount=$firstroyaltydetails[0]->Max_Count +7;
                    if ($comparedate==$startnewdate) {
                        
                        DB::table('second_royalty')
                        ->where('member_id', $sponsorid)
                        ->update(['End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);
                    }
                    else{
                        $newmaxcount=7;
                        $status='Pending';

                         DB::table('second_royalty')
                        ->where('member_id', $sponsorid)
                        ->update(['Start_Date' =>$comparedate,'status' =>$newmaxcount,'End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);


                    }

                       
                   }

                    
                 }


                 }

             }

                  
              }




         if ($Third_Royalty==1) {

                $firstroyaltydetails=thirdroyalty::where('member_id',$sponsorid)->get();
                if ($today>=$Third_Royalty_Date) {
                   
                
                $comparedate= date("Y-m-d", strtotime("$Third_Royalty_Date +7 days"));
                 if ($today<$comparedate) {
                   $Third_Royalty_Direct=$Third_Royalty_Direct+$directbv;


                   if ($Third_Royalty_Direct>=16) {
                    $Third_Royalty_Direct=0;
                     $startnewdate =date("Y-m-d", strtotime("$firstroyaltydetails[0]->End_Date +1 days"));
                     $endnewdate=date("Y-m-d", strtotime("$comparedate +6 days"));
                     $newmaxcount=$firstroyaltydetails[0]->Max_Count +7;
                    if ($comparedate==$startnewdate) {
                        
                        DB::table('third_royalty')
                        ->where('member_id', $sponsorid)
                        ->update(['End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);
                    }
                    else{
                        $newmaxcount=7;
                        $status='Pending';

                         DB::table('third_royalty')
                        ->where('member_id', $sponsorid)
                        ->update(['Start_Date' =>$comparedate,'status' =>$newmaxcount,'End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);


                    }

                       
                   }

                    
                 }//end of line 1075
                 else{

                    $remainder=($today-$comparedate)%7;

                    $Third_Royalty_Date=date("Y-m-d", strtotime("$today -$remainder days"));
                                    $comparedate= date("Y-m-d", strtotime("$Third_Royalty_Date +7 days"));
                 if ($today<$comparedate) {
                   $Third_Royalty_Direct=$directbv;


                   if ($Third_Royalty_Direct>=16) {
                    $Third_Royalty_Direct=0;
                     $startnewdate =date("Y-m-d", strtotime("$firstroyaltydetails[0]->End_Date +1 days"));
                     $endnewdate=date("Y-m-d", strtotime("$comparedate +6 days"));
                     $newmaxcount=$firstroyaltydetails[0]->Max_Count +7;
                    if ($comparedate==$startnewdate) {
                        
                        DB::table('third_royalty')
                        ->where('member_id', $sponsorid)
                        ->update(['End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);
                    }
                    else{
                        $newmaxcount=7;
                        $status='Pending';

                         DB::table('third_royalty')
                        ->where('member_id', $sponsorid)
                        ->update(['Start_Date' =>$comparedate,'status' =>$newmaxcount,'End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);


                    }

                       
                   }

                    
                 }


                 }

             }

                  
              }


        if ($Fourth_Royalty==1) {

                $firstroyaltydetails=fourthroyalty::where('member_id',$sponsorid)->get();
                if ($today>=$Fourth_Royalty_Date) {
                   
                
                $comparedate= date("Y-m-d", strtotime("$Fourth_Royalty_Date +7 days"));
                 if ($today<$comparedate) {
                   $Fourth_Royalty_Direct=$Fourth_Royalty_Direct+$directbv;


                   if ($Fourth_Royalty_Direct>=32) {
                    $Fourth_Royalty_Direct=0;
                     $startnewdate =date("Y-m-d", strtotime("$firstroyaltydetails[0]->End_Date +1 days"));
                     $endnewdate=date("Y-m-d", strtotime("$comparedate +6 days"));
                     $newmaxcount=$firstroyaltydetails[0]->Max_Count +7;
                    if ($comparedate==$startnewdate) {
                        
                        DB::table('fourth_royalty')
                        ->where('member_id', $sponsorid)
                        ->update(['End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);
                    }
                    else{
                        $newmaxcount=7;
                        $status='Pending';

                         DB::table('fourth_royalty')
                        ->where('member_id', $sponsorid)
                        ->update(['Start_Date' =>$comparedate,'status' =>$newmaxcount,'End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);


                    }

                       
                   }

                    
                 }//end of line 1075
                 else{

                    $remainder=($today-$comparedate)%7;

                    $Fourth_Royalty_Date=date("Y-m-d", strtotime("$today -$remainder days"));
                                    $comparedate= date("Y-m-d", strtotime("$Fourth_Royalty_Date +7 days"));
                 if ($today<$comparedate) {
                   $Fourth_Royalty_Direct=$directbv;


                   if ($Fourth_Royalty_Direct>=32) {
                    $Fourth_Royalty_Direct=0;
                     $startnewdate =date("Y-m-d", strtotime("$firstroyaltydetails[0]->End_Date +1 days"));
                     $endnewdate=date("Y-m-d", strtotime("$comparedate +6 days"));
                     $newmaxcount=$firstroyaltydetails[0]->Max_Count +7;
                    if ($comparedate==$startnewdate) {
                        
                        DB::table('fourth_royalty')
                        ->where('member_id', $sponsorid)
                        ->update(['End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);
                    }
                    else{
                        $newmaxcount=7;
                        $status='Pending';

                         DB::table('fourth_royalty')
                        ->where('member_id', $sponsorid)
                        ->update(['Start_Date' =>$comparedate,'status' =>$newmaxcount,'End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);


                    }

                       
                   }

                    
                 }


                 }

             }

                  
              }



           if ($detailssponsor[0]->m_status=="Inactive") {

            if ($leftdirectbv>=1200 && $rightdirectbv>=1200 ) {

               $sponsorstatus="Active";
               $leftdirectbv=$leftdirectbv-1200;
               $rightdirectbv=$rightdirectbv-1200;
            }
               
           }
           else{


              if ($leftdirectbv>=1200 && $rightdirectbv>=1200 ) {
                if ($First_Royalty==1) {
                  
                }else{

                     $products = new firstroyalty;
             $products->member_id = $sponsorid;
            $products->status = "Pending";
            $products->Start_Date = $today;
            $enddate=date("Y-m-d", strtotime("$today +6 days"));
            $products->End_Date  = $enddate;
             $products->Count  = 0;

             $products->Max_Count = 7;
           
          
          
             $products->save();
                     $First_Royalty=1;
                     $leftdirectbv=$leftdirectbv-1200;
                     $rightdirectbv=$rightdirectbv-1200;
                }

               
              
            }



           }

            DB::table('member')
                        ->where('m_id', $sponsorid)
                        ->update(['First_Royalty' =>$First_Royalty,'Second_Royalty' =>$Second_Royalty,'Third_Royalty' =>$Third_Royalty,'Fourth_Royalty' =>$Fourth_Royalty,'First_Royalty_Date' =>$First_Royalty_Date,'Second_Royalty_Date' =>$Second_Royalty_Date,'Third_Royalty_Date' =>$Third_Royalty_Date,'Fourth_Royalty_Date' =>$Fourth_Royalty_Date,'First_Royalty_Direct' =>$First_Royalty_Direct,'Second_royalty_Direct' =>$Second_royalty_Direct,'Third_Royalty_Direct' =>$Third_Royalty_Direct,'Fourth_Royalty_Direct' =>$Fourth_Royalty_Direct,'Left_Direct_BV' =>$leftdirectbv,'Right_Direct_BV' =>$rightdirectbv,'Total_Direct_BV' =>$totaldirectbv,'m_status' =>$sponsorstatus,'Total_Left_Direct_BV' =>$totalleftdirectbv,'Total_Right_Direct_BV' =>$totalrightdirectbv
                       
                        ]);
             $package_price=$details[0]->package_price;
             $amount=$package_price;
            
              member::where('id','1')->increment('Daily_Turnover',$amount);


          
             return redirect()->back()->with('success', 'Member Activated successfully!');
        
      
    }



    public function upgrademember(Request $request) {


        $data = $request->all();

        $id=$data['productid'];
        $updatedpackage=$data['package'];

        $detailspackage = productPackage::where('id',$updatedpackage)->get();

        $updpackagebv=$detailspackage[0]->BV;
        $updpackageci=$detailspackage[0]->CI;
        $updpackageprice=$detailspackage[0]->package_price;
        
           $details = member::where('m_id',$id)->get();
          $today=date("Y-m-d");
          $sponsor_placement=$details[0]->sponsor_placement;
         $packagebv=$updpackagebv-($details[0]->Package_BV);
         $sponsorid=$details[0]->sponsor_id;
         $placementid=$details[0]->placement_id;
          $placement=$details[0]->placement;
           $package_price=$details[0]->package_price;
           $e_wallet=$details[0]->e_wallet;
           $updatedewallet=$e_wallet+($updpackageprice-$package_price);

       

         if ($sponsor_placement=="Left") {

            $direct_left_BV=$packagebv;
           
         }

          if ($sponsor_placement=="Right") {

            $direct_right_BV=$packagebv;
           
         }



        DB::table('member')
                ->where('m_id', $id)
                ->update(['Package_BV' =>$updpackagebv,'max_capping' =>$updpackageci,'package' =>$updatedpackage,'e_wallet' =>$updatedewallet,'package_price' =>$updpackageprice
               
                ]);

    if ($placementid=="") {
               
            }
            else{
               
        self::senduptolevelpvbv($placementid,$packagebv,$placement);
          }
           


        $detailssponsor = member::where('m_id',$sponsorid)->get();
        $leftdirectbv=$detailssponsor[0]->Left_Direct_BV;
          $rightdirectbv=$detailssponsor[0]->Right_Direct_BV;
           $totaldirectbv=$detailssponsor[0]->Total_Direct_BV;
           $sponsorstatus=$detailssponsor[0]->m_status;
           $totalleftdirectbv=$detailssponsor[0]->Total_Left_Direct_BV;
             $totalrightdirectbv=$detailssponsor[0]->Total_Right_Direct_BV;
             
               $First_Royalty=$detailssponsor[0]->First_Royalty;
                 $Second_Royalty=$detailssponsor[0]->Second_Royalty;
                  $Third_Royalty=$detailssponsor[0]->Third_Royalty;
                 $Fourth_Royalty=$detailssponsor[0]->Fourth_Royalty;

                 $First_Royalty_Date=$detailssponsor[0]->First_Royalty_Date;
                 $Second_Royalty_Date=$detailssponsor[0]->Second_Royalty_Date;
                  $Third_Royalty_Date=$detailssponsor[0]->Third_Royalty_Date;
                 $Fourth_Royalty_Date=$detailssponsor[0]->Fourth_Royalty_Date;

                 $First_Royalty_Direct=$detailssponsor[0]->First_Royalty_Direct;
                 $Second_royalty_Direct=$detailssponsor[0]->Second_royalty_Direct;
                 $Third_Royalty_Direct=$detailssponsor[0]->Third_Royalty_Direct;
                 $Fourth_Royalty_Direct=$detailssponsor[0]->Fourth_Royalty_Direct;


              $directbv=$packagebv/1200;

           if ($sponsor_placement=="Left") {

             $leftdirectbv=$leftdirectbv+$direct_left_BV;
              $totaldirectbv=$totaldirectbv+ $direct_left_BV;
               $totalleftdirectbv=$totalleftdirectbv+ $direct_left_BV;
           }

             if ($sponsor_placement=="Right") {

             $rightdirectbv=$rightdirectbv+$direct_right_BV;
             $totaldirectbv=$totaldirectbv+ $direct_right_BV;
              $totalrightdirectbv=$totalrightdirectbv+ $direct_right_BV;
            
               
           }

             if ($First_Royalty==1) {

                $firstroyaltydetails=firstroyalty::where('member_id',$sponsorid)->get();
                if ($today>=$First_Royalty_Date) {
                   
                
                $comparedate= date("Y-m-d", strtotime("$First_Royalty_Date +7 days"));
                 if ($today<$comparedate) {
                   $First_Royalty_Direct=$First_Royalty_Direct+$directbv;


                   if ($First_Royalty_Direct>=1) {
                    $First_Royalty_Direct=0;
                     $startnewdate =date("Y-m-d", strtotime("$firstroyaltydetails[0]->End_Date +1 days"));
                     $endnewdate=date("Y-m-d", strtotime("$comparedate +6 days"));
                     $newmaxcount=$firstroyaltydetails[0]->Max_Count +7;
                    if ($comparedate==$startnewdate) {
                        
                        DB::table('first_royalty')
                        ->where('member_id', $sponsorid)
                        ->update(['End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);
                    }
                    else{
                        $newmaxcount=7;
                        $status='Pending';

                         DB::table('first_royalty')
                        ->where('member_id', $sponsorid)
                        ->update(['Start_Date' =>$comparedate,'status' =>$newmaxcount,'End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);


                    }

                       
                   }

                    
                 }//end of line 1075
                 else{

                    $remainder=($today-$comparedate)%7;

                    $First_Royalty_Date=date("Y-m-d", strtotime("$today -$remainder days"));
                                    $comparedate= date("Y-m-d", strtotime("$First_Royalty_Date +7 days"));
                 if ($today<$comparedate) {
                   $First_Royalty_Direct=$directbv;


                   if ($First_Royalty_Direct>=1) {
                    $First_Royalty_Direct=0;
                     $startnewdate =date("Y-m-d", strtotime("$firstroyaltydetails[0]->End_Date +1 days"));
                     $endnewdate=date("Y-m-d", strtotime("$comparedate +6 days"));
                     $newmaxcount=$firstroyaltydetails[0]->Max_Count +7;
                    if ($comparedate==$startnewdate) {
                        
                        DB::table('first_royalty')
                        ->where('member_id', $sponsorid)
                        ->update(['End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);
                    }
                    else{
                        $newmaxcount=7;
                        $status='Pending';

                         DB::table('first_royalty')
                        ->where('member_id', $sponsorid)
                        ->update(['Start_Date' =>$comparedate,'status' =>$newmaxcount,'End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);


                    }

                       
                   }

                    
                 }


                 }

             }

                  
              }

               if ($Second_Royalty==1) {

                $firstroyaltydetails=secondroyalty::where('member_id',$sponsorid)->get();
                if ($today>=$Second_Royalty_Date) {
                   
                
                $comparedate= date("Y-m-d", strtotime("$Second_Royalty_Date +7 days"));
                 if ($today<$comparedate) {
                   $Second_royalty_Direct=$Second_royalty_Direct+$directbv;


                   if ($Second_royalty_Direct>=4) {
                    $Second_royalty_Direct=0;
                     $startnewdate =date("Y-m-d", strtotime("$firstroyaltydetails[0]->End_Date +1 days"));
                     $endnewdate=date("Y-m-d", strtotime("$comparedate +6 days"));
                     $newmaxcount=$firstroyaltydetails[0]->Max_Count +7;
                    if ($comparedate==$startnewdate) {
                        
                        DB::table('second_royalty')
                        ->where('member_id', $sponsorid)
                        ->update(['End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);
                    }
                    else{
                        $newmaxcount=7;
                        $status='Pending';

                         DB::table('second_royalty')
                        ->where('member_id', $sponsorid)
                        ->update(['Start_Date' =>$comparedate,'status' =>$newmaxcount,'End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);


                    }

                       
                   }

                    
                 }//end of line 1075
                 else{

                    $remainder=($today-$comparedate)%7;

                    $Second_Royalty_Date=date("Y-m-d", strtotime("$today -$remainder days"));
                                    $comparedate= date("Y-m-d", strtotime("$Second_Royalty_Date +7 days"));
                 if ($today<$comparedate) {
                   $Second_royalty_Direct=$directbv;


                   if ($Second_royalty_Direct>=4) {
                    $Second_royalty_Direct=0;
                     $startnewdate =date("Y-m-d", strtotime("$firstroyaltydetails[0]->End_Date +1 days"));
                     $endnewdate=date("Y-m-d", strtotime("$comparedate +6 days"));
                     $newmaxcount=$firstroyaltydetails[0]->Max_Count +7;
                    if ($comparedate==$startnewdate) {
                        
                        DB::table('second_royalty')
                        ->where('member_id', $sponsorid)
                        ->update(['End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);
                    }
                    else{
                        $newmaxcount=7;
                        $status='Pending';

                         DB::table('second_royalty')
                        ->where('member_id', $sponsorid)
                        ->update(['Start_Date' =>$comparedate,'status' =>$newmaxcount,'End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);


                    }

                       
                   }

                    
                 }


                 }

             }

                  
              }




         if ($Third_Royalty==1) {

                $firstroyaltydetails=thirdroyalty::where('member_id',$sponsorid)->get();
                if ($today>=$Third_Royalty_Date) {
                   
                
                $comparedate= date("Y-m-d", strtotime("$Third_Royalty_Date +7 days"));
                 if ($today<$comparedate) {
                   $Third_Royalty_Direct=$Third_Royalty_Direct+$directbv;


                   if ($Third_Royalty_Direct>=16) {
                    $Third_Royalty_Direct=0;
                     $startnewdate =date("Y-m-d", strtotime("$firstroyaltydetails[0]->End_Date +1 days"));
                     $endnewdate=date("Y-m-d", strtotime("$comparedate +6 days"));
                     $newmaxcount=$firstroyaltydetails[0]->Max_Count +7;
                    if ($comparedate==$startnewdate) {
                        
                        DB::table('third_royalty')
                        ->where('member_id', $sponsorid)
                        ->update(['End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);
                    }
                    else{
                        $newmaxcount=7;
                        $status='Pending';

                         DB::table('third_royalty')
                        ->where('member_id', $sponsorid)
                        ->update(['Start_Date' =>$comparedate,'status' =>$newmaxcount,'End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);


                    }

                       
                   }

                    
                 }//end of line 1075
                 else{

                    $remainder=($today-$comparedate)%7;

                    $Third_Royalty_Date=date("Y-m-d", strtotime("$today -$remainder days"));
                                    $comparedate= date("Y-m-d", strtotime("$Third_Royalty_Date +7 days"));
                 if ($today<$comparedate) {
                   $Third_Royalty_Direct=$directbv;


                   if ($Third_Royalty_Direct>=16) {
                    $Third_Royalty_Direct=0;
                     $startnewdate =date("Y-m-d", strtotime("$firstroyaltydetails[0]->End_Date +1 days"));
                     $endnewdate=date("Y-m-d", strtotime("$comparedate +6 days"));
                     $newmaxcount=$firstroyaltydetails[0]->Max_Count +7;
                    if ($comparedate==$startnewdate) {
                        
                        DB::table('third_royalty')
                        ->where('member_id', $sponsorid)
                        ->update(['End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);
                    }
                    else{
                        $newmaxcount=7;
                        $status='Pending';

                         DB::table('third_royalty')
                        ->where('member_id', $sponsorid)
                        ->update(['Start_Date' =>$comparedate,'status' =>$newmaxcount,'End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);


                    }

                       
                   }

                    
                 }


                 }

             }

                  
              }


        if ($Fourth_Royalty==1) {

                $firstroyaltydetails=fourthroyalty::where('member_id',$sponsorid)->get();
                if ($today>=$Fourth_Royalty_Date) {
                   
                
                $comparedate= date("Y-m-d", strtotime("$Fourth_Royalty_Date +7 days"));
                 if ($today<$comparedate) {
                   $Fourth_Royalty_Direct=$Fourth_Royalty_Direct+$directbv;


                   if ($Fourth_Royalty_Direct>=32) {
                    $Fourth_Royalty_Direct=0;
                     $startnewdate =date("Y-m-d", strtotime("$firstroyaltydetails[0]->End_Date +1 days"));
                     $endnewdate=date("Y-m-d", strtotime("$comparedate +6 days"));
                     $newmaxcount=$firstroyaltydetails[0]->Max_Count +7;
                    if ($comparedate==$startnewdate) {
                        
                        DB::table('fourth_royalty')
                        ->where('member_id', $sponsorid)
                        ->update(['End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);
                    }
                    else{
                        $newmaxcount=7;
                        $status='Pending';

                         DB::table('fourth_royalty')
                        ->where('member_id', $sponsorid)
                        ->update(['Start_Date' =>$comparedate,'status' =>$newmaxcount,'End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);


                    }

                       
                   }

                    
                 }//end of line 1075
                 else{

                    $remainder=($today-$comparedate)%7;

                    $Fourth_Royalty_Date=date("Y-m-d", strtotime("$today -$remainder days"));
                                    $comparedate= date("Y-m-d", strtotime("$Fourth_Royalty_Date +7 days"));
                 if ($today<$comparedate) {
                   $Fourth_Royalty_Direct=$directbv;


                   if ($Fourth_Royalty_Direct>=32) {
                    $Fourth_Royalty_Direct=0;
                     $startnewdate =date("Y-m-d", strtotime("$firstroyaltydetails[0]->End_Date +1 days"));
                     $endnewdate=date("Y-m-d", strtotime("$comparedate +6 days"));
                     $newmaxcount=$firstroyaltydetails[0]->Max_Count +7;
                    if ($comparedate==$startnewdate) {
                        
                        DB::table('fourth_royalty')
                        ->where('member_id', $sponsorid)
                        ->update(['End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);
                    }
                    else{
                        $newmaxcount=7;
                        $status='Pending';

                         DB::table('fourth_royalty')
                        ->where('member_id', $sponsorid)
                        ->update(['Start_Date' =>$comparedate,'status' =>$newmaxcount,'End_Date' =>$endnewdate,'Max_Count' =>$newmaxcount
                       
                        ]);


                    }

                       
                   }

                    
                 }


                 }

             }

                  
              }



           if ($detailssponsor[0]->m_status=="Inactive") {

            if ($leftdirectbv>=1200 && $rightdirectbv>=1200 ) {

               $sponsorstatus="Active";
               $leftdirectbv=$leftdirectbv-1200;
               $rightdirectbv=$rightdirectbv-1200;
            }
               
           }
           else{


              if ($leftdirectbv>=1200 && $rightdirectbv>=1200 ) {
                if ($First_Royalty==1) {
                  
                }else{

                     $products = new firstroyalty;
             $products->member_id = $sponsorid;
            $products->status = "Pending";
            $products->Start_Date = $today;
            $enddate=date("Y-m-d", strtotime("$today +6 days"));
            $products->End_Date  = $enddate;
             $products->Count  = 0;

             $products->Max_Count = 7;
           
          
          
             $products->save();
                     $First_Royalty=1;
                     $leftdirectbv=$leftdirectbv-1200;
                     $rightdirectbv=$rightdirectbv-1200;
                }

               
              
            }



           }

            DB::table('member')
                        ->where('m_id', $sponsorid)
                        ->update(['First_Royalty' =>$First_Royalty,'Second_Royalty' =>$Second_Royalty,'Third_Royalty' =>$Third_Royalty,'Fourth_Royalty' =>$Fourth_Royalty,'First_Royalty_Date' =>$First_Royalty_Date,'Second_Royalty_Date' =>$Second_Royalty_Date,'Third_Royalty_Date' =>$Third_Royalty_Date,'Fourth_Royalty_Date' =>$Fourth_Royalty_Date,'First_Royalty_Direct' =>$First_Royalty_Direct,'Second_royalty_Direct' =>$Second_royalty_Direct,'Third_Royalty_Direct' =>$Third_Royalty_Direct,'Fourth_Royalty_Direct' =>$Fourth_Royalty_Direct,'Left_Direct_BV' =>$leftdirectbv,'Right_Direct_BV' =>$rightdirectbv,'Total_Direct_BV' =>$totaldirectbv,'m_status' =>$sponsorstatus,'Total_Left_Direct_BV' =>$totalleftdirectbv,'Total_Right_Direct_BV' =>$totalrightdirectbv
                       
                        ]);
                $amount=$updpackageprice-$package_price;
               member::where('id','1')->increment('Daily_Turnover',$amount);

          
             return redirect()->back()->with('success', 'Member Upgraded successfully!');
        
      
    }

public static function memberdetails() {
  if($user = Auth::user())
            {
          $id = $user->user_id;
           $rollid=$user->roll_id;
         
            }

             $member = member::where('id',$id)->get(); 


return $member;
}

public static function packagedetails($id) {
 
             $member = productPackage::where('id',$id)->get(); 


return $member;
}


public function FamilyPhoto(Request $request){

        if($request->isMethod('post')){
            $data = $request->all();

            $products = new familyphoto;
             if($user = Auth::user())
            {
           $id = $user->user_id;
           $rollid=$user->roll_id;
         
            }
             $products->m_id = $id;
           
               if($request->hasfile('image')){

               $img_tmp = $request->file('image');
               

                if($img_tmp->isValid()){
                //Image Path Code

                $extension = $img_tmp->GetClientOriginalExtension();
                $filename = $id.rand(111,99999).'.'.$extension;
                $img_path = 'upload/familyPhoto/'.$filename;

                //Image Resize

                Image::make($img_tmp)->resize(100,100)->save($img_path);

                $products->Image=$filename;

            }
            
            }

             $products->save();
     
              return redirect()->back()->with('success', 'Photo Added Successfully!');
          
        }

        return view('members.add_family_photo');
    }

    public function MemberFamilyPhoto(Request $request,$id){

        if($request->isMethod('post')){
            $data = $request->all();

            $products = new familyphoto;
             if($user = Auth::user())
            {
           $id = $user->user_id;
           $rollid=$user->roll_id;
         
            }
             $products->m_id = $id;
           
               if($request->hasfile('image')){

               $img_tmp = $request->file('image');
               

                if($img_tmp->isValid()){
                //Image Path Code

                $extension = $img_tmp->GetClientOriginalExtension();
                $filename = $id.rand(111,99999).'.'.$extension;
                $img_path = 'upload/familyPhoto/'.$filename;

                //Image Resize

                Image::make($img_tmp)->resize(100,100)->save($img_path);

                $products->Image=$filename;

            }
            
            }

             $products->save();
     
              return redirect()->back()->with('success', 'Photo Added Successfully!');
          
        }

        return view('admin.member.memberfamilyphoto')->with(compact('id'));
    }

     public static function familyphotodaetailss($id) {

       
 
             $member = familyphoto::where('m_id',$id)->get(); 


return $member;
}

    public static function familyphotodaetails() {

         if($user = Auth::user())
            {
            $id = $user->user_id;
           $rollid=$user->roll_id;
         
            }
 
             $member = familyphoto::where('m_id',$id)->get(); 


return $member;
}


public function UploadSelfie(Request $request){

        if($request->isMethod('post')){
            $data = $request->all();

            $products = new familyphoto;
             if($user = Auth::user())
            {
           $id = $user->user_id;
           $rollid=$user->roll_id;
         
            }
             $products->m_id = $id;
           
               if($request->hasfile('image')){

               $img_tmp = $request->file('image');
               

                if($img_tmp->isValid()){
                //Image Path Code

                $extension = $img_tmp->GetClientOriginalExtension();
                $filename = $id.rand(111,99999).'.'.$extension;
                $img_path = 'upload/familyPhoto/'.$filename;

                //Image Resize

                Image::make($img_tmp)->resize(100,100)->save($img_path);

                $products->Image=$filename;

            }
            
            }

             $products->save();
     
              return redirect()->back()->with('success', 'Selfie Added  Successfully!');
          
        }

        return view('members.add_selfie_photo');
    }

    public function MemberSelfieList(Request $request){



        return view('admin.member.memberselfielist');
    }

    public function TakeSelfie(Request $request){

        if($request->isMethod('post')){

            $data = $request->all();

            $products = new selfiephoto;
             if($user = Auth::user())
            {
           $id = $user->user_id;
           $rollid=$user->roll_id;
         
            }
             $products->m_id = $id;
              $products->Status = "Pending";
              $comment = $data['comment'];
               $products->Comment = $comment;
              $img = $data['image'];
              if ($img) {
                  $image_parts = explode(";base64,", $img);
      $image_type_aux = explode("image/", $image_parts[0]);
     $image_type = $image_type_aux[1];
  
   $image_base64 = base64_decode($image_parts[1]);
   $filename = $id.rand(111,99999).'.'.$image_type;
     $img_path = 'upload/selfiePhoto/'.$filename;
      Image::make($image_base64)->resize(100,100)->save($img_path);

                $products->Image=$filename;
              }
   
    
           
             $products->save();
     
              return redirect('member/UploadSelfie')->with('success', 'Selfie Added  Successfully!');
          
        }

        return view('members.camPhoto');
    }


     public static function selfiephotodetails() {

         if($user = Auth::user())
            {
            $id = $user->user_id;
           $rollid=$user->roll_id;
         
            }
 
             $member = selfiephoto::where('m_id',$id)->get(); 


return $member;
}
   public static function selfiephotodetailsss() {

        
 
             $member = selfiephoto::get(); 


return $member;
}










public function TalentHunt1(Request $request){

        if($request->isMethod('post')){


            $data = $request->all();
            if($user = Auth::user())
            {
           $id = $user->user_id;
           $rollid=$user->roll_id;
         
            }

             $wllatep=$data['onlinepayment'];
            $membersss = member::where('id',$id)->get();
            $walleta= $membersss[0]->wallet;
            if ($walleta>=$wllatep) {

           
            $products = new talenthunt1;
             
             $products->m_id = $id;
             $products->Image = $data['videolink'];
              $products->Status ="Pending";
             $products->Transaction_Id = "abc";
              $products->E_Wallet = $data['ewallet'];
               
                 $products->online_payment = $data['onlinepayment'];
           
              

             $products->save();
             $walleta=$walleta-$wllatep;
             $ewallets = $data['ewallet'];
               member::where('id',$id)->decrement('wallet',$wllatep);
                member::where('id',$id)->decrement('e_wallet',$ewallets);
     
              return redirect()->back()->with('success', 'Participated Successfully!');

          }
          else{

            echo "<script>alert('you have not sufficient wallet amount')</script>";
             return redirect()->back()->with('success', 'Participated Successfully!');
          }
          
        }

        return view('members.talenthunt1');
    }

    public function MemberTalentHuntList1(Request $request){
      
        return view('admin.member.membertalenthunt1');
    }

     public function MemberTalentHuntList2(Request $request){



        return view('admin.member.membertalenthunt2');
    }

     public static function talenthunt1detailsss() {

       
             $member = talenthunt1::get(); 


return $member;
}
   public static function talenthunt2detailsss() {

       
             $member = talenthunt2::get(); 


return $member;
}

    public function checkewallet(Request $request)
    {
        if($user = Auth::user())
            {
           $id = $user->user_id;
           $rollid=$user->roll_id;
         
            }
             $ids=$request->id;

   
        
            $details = member::where('id',$id)->get();
          $rowcount =$details[0]->e_wallet;
           if ($rowcount >= $ids) {
    echo "";
} else {
    echo "This <b class='text-success'>(" . $id . ")</b> Entered Amount is greater than available e-wallet amount.";
}
           
        
    }

     public static function talenthunt1details() {

         if($user = Auth::user())
            {
            $id = $user->user_id;
           $rollid=$user->roll_id;
         
            }
 
             $member = talenthunt1::where('m_id',$id)->get(); 


return $member;
}

public function TalentHunt2(Request $request){

        if($request->isMethod('post')){
            $data = $request->all();
            if($user = Auth::user())
            {
           $id = $user->user_id;
           $rollid=$user->roll_id;
         
            }

             $wllatep=$data['onlinepayment'];
            $membersss = member::where('id',$id)->get();
            $walleta= $membersss[0]->wallet;
            if ($walleta>=$wllatep) {

            $products = new talenthunt2;
             
             $products->m_id = $id;
             $products->Image = $data['videolink'];
              $products->Status ="Pending";
             $products->Transaction_Id = "abc";
              $products->E_Wallet = $data['ewallet'];
             
                 $products->online_payment = $data['onlinepayment'];
           
              

             $products->save();
      $walleta=$walleta-$wllatep;
             $ewallets = $data['ewallet'];
               member::where('id',$id)->decrement('wallet',$wllatep);
                member::where('id',$id)->decrement('e_wallet',$ewallets);
     
              return redirect()->back()->with('success', 'Participated Successfully!');

          }
          else{

            echo "<script>alert('you have not sufficient wallet amount')</script>";
             return redirect()->back()->with('success', 'Participated Successfully!');
          }
          
        }

        return view('members.talenthunt2');
    }

public static function talenthunt2details() {

         if($user = Auth::user())
            {
            $id = $user->user_id;
           $rollid=$user->roll_id;
         
            }
 
             $member = talenthunt2::where('m_id',$id)->get(); 


return $member;
}


    public function approveselfie(Request $request,$id){
         
         $todaydate=date('Y-m-d');
         $selfie = selfiephoto::where('id',$id)->get();
      $memberid=$selfie[0]->m_id;
         $status=$selfie[0]->Status;
         if ($status="Pending") {

             $member = member::where('id',$memberid)->get();

             $Photo_Date=$member[0]->Photo_Date;
              $Photo_Count=$member[0]->Photo_Count;
              $Photo_Income=$member[0]->Photo_Income;

              if ($Photo_Date=="") {

                  $Photo_Date=$todaydate;
                  $Photo_Count=0;

              }
               if ($Photo_Date!="$todaydate") {
                
                  $Photo_Date=$todaydate;
                   $Photo_Count=0;
              }

              if ($Photo_Date=="$todaydate") {

                if ($Photo_Count<5) {
                    $Photo_Count=$Photo_Count+1;
                    $Photo_Income=$Photo_Income+5;
                    $status="Approved";
                   
                }
                else{
                  
                  $status="Rejected";

                }
                
              }

               DB::table('member')
                ->where('id', $memberid)
                ->update(['Photo_Count' =>$Photo_Count,'Photo_Date' =>$Photo_Date,'Photo_Income' =>$Photo_Income
               
                ]);

                 DB::table('member_selfie_photo')
                ->where('id', $id)
                ->update(['Status' =>$status
               
                ]);


            
         }


         
       return redirect()->back()->with('success', 'Approved Successfully!');
       
    }

     public function rejectselfie(Request $request,$id){
         
         $todaydate=date('Y-m-d');
         $selfie = selfiephoto::where('id',$id)->get();
      $memberid=$selfie[0]->m_id;
         $status=$selfie[0]->Status;
         if ($status="Pending") {

            $status="Rejected";



                 DB::table('member_selfie_photo')
                ->where('id', $id)
                ->update(['Status' =>$status
               
                ]);


            
         }
  
       return redirect()->back()->with('success', 'Rejected Successfully!');
       
    }

        public function approvetalenthunt1(Request $request,$id){
         
         $todaydate=date('Y-m-d');
         $selfie = talenthunt1::where('id',$id)->get();
      $memberid=$selfie[0]->m_id;
         $status=$selfie[0]->Status;
         $amount=$selfie[0]->online_payment;
         if ($status="Pending") {

             $member = member::where('id','1')->get();

             $Photo_Date=$member[0]->Talent_Hunt_Date_1;
              $Photo_Count=$member[0]->Talent_Hunt_Count_1;
              $Photo_Income=$member[0]->Talent_Hunt_Amount_1;

              if ($Photo_Date=="") {

                  $Photo_Date=$todaydate;
                  $Photo_Count=0;

              }
               if ($Photo_Date!="$todaydate") {
                
                  $Photo_Date=$todaydate;
                   $Photo_Count=0;
              }

              if ($Photo_Date=="$todaydate") {

            
                    $Photo_Count=$Photo_Count+1;
                    $Photo_Income=$Photo_Income+$amount;
                    $status="Approved";
             
              }

               DB::table('member')
                ->where('id', '1')
                ->update(['Talent_Hunt_Count_1' =>$Photo_Count,'Talent_Hunt_Date_1' =>$Photo_Date,'Talent_Hunt_Amount_1' =>$Photo_Income
               
                ]);

                

                 DB::table('member')
                ->where('id',$memberid)
                ->update(['Talent_Hunt_Status1' =>1]);

                 DB::table('talent_hunt_1')
                ->where('id', $id)
                ->update(['Status' =>$status
               
                ]);


            
         }


         
       return redirect()->back()->with('success', 'Approved Successfully!');
       
    }

      public function rejecttalenthunt1(Request $request,$id){
         
        $todaydate=date('Y-m-d');
         $selfie = talenthunt1::where('id',$id)->get();
      $memberid=$selfie[0]->m_id;
         $status=$selfie[0]->Status;
         $amount=$selfie[0]->online_payment;
         if ($status="Pending") {

             $member = member::where('id','1')->get();

             $Photo_Date=$member[0]->Talent_Hunt_Date_1;
              $Photo_Count=$member[0]->Talent_Hunt_Count_1;
              $Photo_Income=$member[0]->Talent_Hunt_Amount_1;

              if ($Photo_Date=="") {

                  $Photo_Date=$todaydate;
                  $Photo_Count=0;

              }
               if ($Photo_Date!="$todaydate") {
                
                  $Photo_Date=$todaydate;
                   $Photo_Count=0;
              }

              if ($Photo_Date=="$todaydate") {

            
                    $Photo_Count=$Photo_Count+1;
                    $Photo_Income=$Photo_Income+$amount;
                    $status="Rejected";
             
              }

               DB::table('member')
                ->where('id', '1')
                ->update(['Talent_Hunt_Date_1' =>$Photo_Date,'Talent_Hunt_Amount_1' =>$Photo_Income
               
                ]);


                 DB::table('talent_hunt_1')
                ->where('id', $id)
                ->update(['Status' =>$status
               
                ]);


            
         }
  
       return redirect()->back()->with('success', 'Rejected Successfully!');
       
    }



      public function approvetalenthunt2(Request $request,$id){
         
         $todaydate=date('Y-m-d');
         $selfie = talenthunt2::where('id',$id)->get();
      $memberid=$selfie[0]->m_id;
         $status=$selfie[0]->Status;
         $amount=$selfie[0]->online_payment;
         if ($status="Pending") {

             $member = member::where('id','1')->get();

             $Photo_Date=$member[0]->Talent_Hunt_Date_2;
              $Photo_Count=$member[0]->Talent_Hunt_Count_2;
              $Photo_Income=$member[0]->Talent_Hunt_Amount_2;

              if ($Photo_Date=="") {

                  $Photo_Date=$todaydate;
                  $Photo_Count=0;

              }
               if ($Photo_Date!="$todaydate") {
                
                  $Photo_Date=$todaydate;
                   $Photo_Count=0;
              }

              if ($Photo_Date=="$todaydate") {

            
                    $Photo_Count=$Photo_Count+1;
                    $Photo_Income=$Photo_Income+$amount;
                    $status="Approved";
             
              }

               DB::table('member')
                ->where('id', '1')
                ->update(['Talent_Hunt_Count_2' =>$Photo_Count,'Talent_Hunt_Date_2' =>$Photo_Date,'Talent_Hunt_Amount_2' =>$Photo_Income
               
                ]);

                

                 DB::table('member')
                ->where('id',$memberid)
                ->update(['Talent_Hunt_Status2' =>1]);

                 DB::table('talent_hunt_2')
                ->where('id', $id)
                ->update(['Status' =>$status
               
                ]);


            
         }


         
       return redirect()->back()->with('success', 'Approved Successfully!');
       
    }

      public function rejecttalenthunt2(Request $request,$id){
         
        $todaydate=date('Y-m-d');
         $selfie = talenthunt2::where('id',$id)->get();
      $memberid=$selfie[0]->m_id;
         $status=$selfie[0]->Status;
         $amount=$selfie[0]->online_payment;
         if ($status="Pending") {

             $member = member::where('id','1')->get();

             $Photo_Date=$member[0]->Talent_Hunt_Date_2;
              $Photo_Count=$member[0]->Talent_Hunt_Count_2;
              $Photo_Income=$member[0]->Talent_Hunt_Amount_2;

              if ($Photo_Date=="") {

                  $Photo_Date=$todaydate;
                  $Photo_Count=0;

              }
               if ($Photo_Date!="$todaydate") {
                
                  $Photo_Date=$todaydate;
                   $Photo_Count=0;
              }

              if ($Photo_Date=="$todaydate") {

            
                    $Photo_Count=$Photo_Count+1;
                    $Photo_Income=$Photo_Income+$amount;
                    $status="Rejected";
             
              }

               DB::table('member')
                ->where('id', '1')
                ->update(['Talent_Hunt_Date_2' =>$Photo_Date,'Talent_Hunt_Amount_2' =>$Photo_Income
               
                ]);


                 DB::table('talent_hunt_2')
                ->where('id', $id)
                ->update(['Status' =>$status
               
                ]);


            
         }
  
       return redirect()->back()->with('success', 'Rejected Successfully!');
       
    }


    public function MemberRewardedList(Request $request){


        return view('admin.member.memberrewardedlist');
    }

     public static function memberrewarededdetails() {

        
 
             $member = memberreward::get(); 


return $member;
}

 public static function rewarededdetails($id) {

        
 
             $member = reward::where('id',$id)->get(); 


return $member;
}

      public function dispatchreward(Request $request,$id){
         
         $todaydate=date('Y-m-d');
         $selfie = memberreward::where('id',$id)->get();
      $memberid=$selfie[0]->member_id;
         $status=$selfie[0]->status;
         $rewardid=$selfie[0]->reward_id;
          $selfies = reward::where('id',$rewardid)->get();
         $amount=$selfies[0]->Reward_Amount;
         if ($status="Pending") {

                    $status="Dispatched";
     
              

                 member::where('m_id',$memberid)->increment('wallet',$amount);

                 DB::table('member_reward')
                ->where('id', $id)
                ->update(['status' =>$status,'Dispatch_Date' =>$todaydate
               
                ]);

         }


         
       return redirect()->back()->with('success', 'Approved Successfully!');
       
    }


     public function MemberClosingStatement(Request $request){


        return view('admin.member.memberclosingstatement');
    }

     public static function MemberClosingdetails() {

        
 
             $member = closingstatement::get(); 


return $member;
}

 public static function Memberdashboarddetails($id) {
   $today=date('Y-m-d');
        
 
    $member = member::get();
      $memberpair = member::sum('wallet_amount');
    $memberactive = member::where('m_status',"Inactive")->get();
     $memberinactive = member::where('m_status',"Active")->get();
       $membertoday = member::where('m_date',$today)->get();
        $memberadmin = member::where('id','1')->get();

    if ($id=="totalmember") {
       return (count($member));
    }
     if ($id=="totalactivemember") {
       return (count($memberactive));
    }

     if ($id=="totalinactivemember") {
       return (count($memberinactive));
    }

     if ($id=="todayjoining") {
       return (count($membertoday));
    }

    if ($id=="turnover") {
       return ($memberadmin[0]->Daily_Turnover);
    }

    if ($id=="pairincome") {
       return ($memberpair);
    }

}


 public static function getdownlinecount($id) {

     
         $memberList = member::where('placement_id',$id)->get();
         $downcount=0;
         $downcount=$downcount+count($memberList);
    foreach($memberList as $product) {  ?>
                                
    <?php $downcount=$downcount+ self::getdownlinecount($product->m_id);     
                                    
                                           }

   return   $downcount;                                     
}

 public static function getactivedownlinecount($id) {

     
         $memberList = member::where('placement_id',$id)->get();
         $downcount=0;
         
    foreach($memberList as $product) { 
    if($product->m_status=="Active"){
    $downcount=$downcount+1;
    } ?>
                                
    <?php $downcount=$downcount+ self::getactivedownlinecount($product->m_id);     
                                    
                                           }

   return   $downcount;                                     
}

public static function getinactivedownlinecount($id) {

     
         $memberList = member::where('placement_id',$id)->get();
         $downcount=0;
         
    foreach($memberList as $product) { 
    if($product->m_status=="Inactive"){
    $downcount=$downcount+1;
    } ?>
                                
    <?php $downcount=$downcount+ self::getinactivedownlinecount($product->m_id);     
                                    
                                           }

   return   $downcount;                                     
}


     public static function DirectDownlineCount(){

         if($user = Auth::user())
            {
          $id = $user->user_id;
           $rollid=$user->roll_id;
         
            }
         $member = member::where('id',$id)->get();  
          $memberid=$member[0]->m_id;

        $memberList = member::where('sponsor_id',$memberid)->get();
        return count($memberList);



       
    }


    public function ClosingStatement(Request $request){




        return view('members.closingstatement');
    }

     public static function Closingdetails() {

               if($user = Auth::user())
            {
          $id = $user->user_id;
           $rollid=$user->roll_id;
         
            }
         $member = member::where('id',$id)->get();  
          $memberid=$member[0]->m_id;
 
             $member = closingstatement::where('m_id',$memberid)->get(); 


     return $member;
}



public function AddPayment(Request $request){


        if($request->isMethod('post')){
            $data = $request->all();

            $products = new member;
             $products->m_id = "juijhy";
            $products->sponsor_id = $data['sponsor_id'];
            $products->placement_id = $data['placement_id'];
            $products->placement  = $data['placement'];
             $products->m_password  = $data['password'];

             $products->m_email = $data['m_email'];
            $products->m_mobile  = $data['m_mobile'];
          
            $products->sponsor_name = $data['sponsor_name'];
            $products->m_name = $data['m_name'];
            $products->m_pan = $data['pan_no'];
            $products->m_status = "Inactive";
            $products->m_date = date('Y-m-d');
             $products->package = $data['package'];

             $package = productPackage::where('id',$data['package'] )->get();


            $products->max_capping = $package[0]->CI;
            $products->Extra_Caping = (($package[0]->CI)*2.5)/100;
              $products->Package_BV = $package[0]->BV;
               $products->package_price = $package[0]->package_price;
              




              if ($data['sponsor_id']==$data['placement_id']) {

               $sponsorplacement=$data['placement'];

            }
            else{

               $sponsorplacement= self::sponsorplacement($data['sponsor_id'],$data['placement_id']); 

                 

            }
             $products->sponsor_placement = $sponsorplacement;

           
            

             $products->save();
             $lastinsertid=$products->id;
                    if (($lastinsertid/10)<1) {
                        $genid='90000'.$lastinsertid;
                    }
                     elseif (($lastinsertid/100)<1) {
                        $genid='9000'.$lastinsertid;
                    }
                     elseif (($lastinsertid/1000)<1) {
                        $genid='900'.$lastinsertid;
                    }
                     elseif (($lastinsertid/10000)<1) {
                        $genid='90'.$lastinsertid;
                    }
                     elseif (($lastinsertid/100000)<1) {
                        $genid='9'.$lastinsertid;
                    }
                     else{

                        $genid=$lastinsertid;
                    }

                    $details = member::where('m_id',$genid)->get();
                     $rowcount2 = count($details);
                    
                 if ($rowcount2>0) {
                     $RowAlls = mysqli_fetch_array($resultDDL);
                     $uid=$details[0]->id;

                       if (($uid/10)<1) {
                        $genid='90000'.$uid;
                    }
                     elseif (($uid/100)<1) {
                        $genid='9000'.$uid;
                    }
                     elseif (($uid/1000)<1) {
                        $genid='900'.$uid;
                    }
                     elseif (($uid/10000)<1) {
                        $genid='90'.$uid;
                    }
                     elseif (($uid/100000)<1) {
                        $genid='9'.$uid;
                    }
                     else {
                        $genid=$uid;
                    }
                 }

                   DB::table('member')
                ->where('id', $lastinsertid)
                ->update(['m_id' =>$genid
               
                ]);

                 $User = new User;
                $User->name = $data['m_name'];
                 $User->user_id = $lastinsertid;

                 $User->email  = $data['m_email'];
                    $User->password  = bcrypt($data['password']);
                      $User->roll_id  = 5;
                      $User->save();
            
            
              return redirect()->back()->with('success', 'Member Registered successfully!');
           
           

        }


           if($user = Auth::user())
            {
          $id = $user->user_id;
           $rollid=$user->roll_id;
         
            }
         $member = member::where('id',$id)->get();  
          $memberid=$member[0]->m_id;
          $mypackage=$member[0]->package;


           $activationpackage = productPackage::where('id',$mypackage)->get();
        $activationpackage_dropdown = "";
        foreach ($activationpackage as $key) {
            $activationpackage_dropdown .= "<option value='".$key->id."'>".$key->package_name."</option>";

             //$maincategory = MainCategory::where(['category_sub_group_id']=>$key)->get();


        }

        $upgradationpackage = productPackage::where('id','>',$mypackage)->get();
        $upgradationpackage_dropdown = "";
        foreach ($upgradationpackage as $key) {
            $upgradationpackage_dropdown .= "<option value='".$key->id."'>".$key->package_name."</option>";

             //$maincategory = MainCategory::where(['category_sub_group_id']=>$key)->get();


        }
 

      
        $package = productPackage::get();
        $package_dropdown = "<option selected disabled>Select Package</option>";
        foreach ($package as $key) {
            $package_dropdown .= "<option value='".$key->id."'>".$key->package_name."</option>";

             //$maincategory = MainCategory::where(['category_sub_group_id']=>$key)->get();


        }


        return view('members.addpayment')->with(compact('package_dropdown','activationpackage_dropdown','upgradationpackage_dropdown'));
    }

  public static function generateSignature($postData){


      $secretKey = "8d492c316ad6bedda97ea0b2c3399c9c3e0e9d69";
 ksort($postData);
 $signatureData = "";
 foreach ($postData as $key => $value){
      $signatureData .= $key.$value;
 }
 $signature = hash_hmac('sha256', $signatureData, $secretKey,true);
 $signature = base64_encode($signature);
 return $signature;
     
   
 }
 
 
  public static function senduptolevelreamount($placementid1,$packagebv1,$placement1){

 $amount=$packagebv1;
     
       $details = member::where('m_id',$placementid1)->get();

         $placementid=$details[0]->placement_id;
          $placement=$details[0]->placement;
           $Left_BV=$details[0]->Left_BV;
          $Right_BV=$details[0]->Right_BV;
          $Total_Left_BV=$details[0]->Total_Left_BV;
          $Total_Right_Bv=$details[0]->Total_Right_Bv;
           $daily_caping=$details[0]->daily_caping;
            $daily_date=$details[0]->daily_date;
             $max_capping=$details[0]->max_capping;
            $wallet_amount=$details[0]->wallet_amount;
             $Left_Point=$details[0]->Left_Point;
              $Right_Point=$details[0]->Right_Point;
              if($placement1=='Left')
              {
                  member::where('m_id',$placementid1)->increment('Left_Repurchase',$amount); 
              }
               if($placement1=='Right')
              {
                  member::where('m_id',$placementid1)->increment('Right_Repurchase',$amount); 
              }
              
                if ($placementid=="") {
               
            }
            else{
              
            self::senduptolevelreamount($placementid,$amount,$placement);
          }
            
              
  }




    public function PayAmount(Request $request){

        if($request->isMethod('post')){
    

            $data = $request->all();
            if($user = Auth::user())
            {
           $id = $user->user_id;
           $rollid=$user->roll_id;
         
            }

             $amount=$data['m_name'];
            $membersss = member::where('id',$id)->get();
            $memberid= $membersss[0]->m_id;
            $placementid=$membersss[0]->placement_id;
             $placement=$membersss[0]->placement;
             
               member::where('id','1')->increment('Daily_Turnover',$amount);
                 member::where('id',$id)->increment('Repurchase',$amount);
            
                
                 if ($placementid=="") {
               
            }
            else{
               
            self::senduptolevelreamount($placementid,$amount,$placement);
          }
        
             return redirect()->back()->with('success', 'Repurchased Successfully!');
          
          
        }

       
    }



     public static function Memberssdashboarddetails($id) {

       if($user = Auth::user())
            {
          $ids = $user->user_id;
           $rollid=$user->roll_id;
         
            }  
 
    $memberactive = member::where('id',$ids)->get();
   

    if ($id=="pairincome") {
       return ($memberactive[0]->wallet_amount);
    }
     if ($id=="repurchase") {
       return ($memberactive[0]->Repurchase);
    }
     if ($id=="leftrepurchase") {
       return ($memberactive[0]->Left_Repurchase);
    }
     if ($id=="rightrepurchase") {
       return ($memberactive[0]->Right_Repurchase);
    }
     if ($id=="ewallet") {
       return ($memberactive[0]->e_wallet);
    }

     if ($id=="fwallet") {
      return ($memberactive[0]->f_wallet);
    }

    if ($id=="photowallet") {
      return ($memberactive[0]->Photo_Income);
    }
    if ($id=="wallet") {
      return ($memberactive[0]->wallet);
    }

    if ($id=="repurchasewallet") {
      return ($memberactive[0]->Repurchase_Wallet);
    }

    if ($id=="activationwallet") {
      return ($memberactive[0]->Activation_Wallet);
    }

    if ($id=="upgradewallet") {
      return ($memberactive[0]->Upgrade_Wallet);
    }

}


}
