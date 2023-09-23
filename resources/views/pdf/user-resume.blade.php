<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<style>
  
</style>
<body>

    <div class="pds-container" style="height: auto; width:100%; border:solid 1px black">
    
        <div class="pds-header" style="height: 100px; width:100%; border:solid 1px black; height:auto;">
          <div style="padding: 5px 10px; display:flex; flex-direction: column;">
            <i style="font-family: sans-serif; font-weight:700; font-size:15px">CS Form No. 212</i><br>
            <i style="font-family: sans-serif; font-weight:600; font-size:12px">Revised 2017</i>

            <div class="text-pds" style="display: flex; width:100%; text-align:center;  "><span style="font-size: 29px; font-weight:700; font-family:Arial, Helvetica, sans-serif">PERSONAL DATA SHEET</span></div>

            <div class="warning" style="display: flex; flex-wrap:wrap; width:100%; margin-top:10px;"><i style="font-size: 11px; font-family: sans-serif;">WARNING: Any misrepresentation made in the Personal Data Sheet and the Work Experience Sheet shall cause the filing of administrative/criminal case/s against the person concerned.</i></div>
            <div class="read" style="display: flex; flex-wrap:wrap; width:100%; margin-top:5px; "><i style="font-size: 11px; font-family: sans-serif;">READ THE ATTACHED GUIDE TO FILLING OUT THE PERSONAL DATA SHEET (PDS) BEFORE ACCOMPLISHING THE PDS FORM.</i>
            
            </div>
            <div style="display:flex; width:100%; margin-left:60%; ">
              <div style="height: 20px; width:10%; border:solid 1px black; margin-top:4px; background-color:rgb(158, 158, 158);">
                <span style="font-size:11px; padding:5px">1. CS ID No.</span>
              </div>
              
            </div>

            <div style="height: 20px; width:28.7%; border:solid 1px black; position: absolute; float: right; top:11.6%"></div>

            
         
             
                
              </div>
           
  
         

           
          </div>

          {{-- //personal information --}}
          <div class="personal-info" style=" width:100%; border:solid 1px black; height:auto;">
                <div style="width:auto; display:flex; justify-content:center; align-items:center; padding:4px; background-color:rgb(158, 158, 158); ">
                  <i style="font-family:Arial, Helvetica, sans-serif; font-size:15px; font-weight:700; color:white">I. PERSONAL INFORMATION</i>
                </div>

                <div class="try" style="width: 100%; height:auto; position:relative">
                  <div style="height:auto; width:23%; padding: 5px 0px 15px 9px; display:flex; flex-direction: column; border-bottom:1px solid black; border-right:1px solid black;  background:rgba(228, 228, 228, 0.875); ">
                    
                    <span style="font-size:11px; font-family:Arial, Helvetica, sans-serif"> 2. SURNAME</span> <br>
                   <span style="margin-left:0.8rem; font-size:11px; font-family:Arial, Helvetica, sans-serif; position: absolute; top:25; margin-bottom:20px">FIRST NAME</span> <br>
                    <span style="margin-left:0.8rem; font-size:11px; font-family:Arial, Helvetica, sans-serif; position: absolute; top:44">MIDDLE NAME</span> <br>
                  </div>


                  {{-- surname --}}
                  <div class="surname" style="position: absolute; border-bottom:solid 1px black; width:75.5%; float: right; padding-top:5px; top:0; height:20px"><span style="padding:10px; margin-top:2px"><span style="padding:10px; margin-top:2px">{{$surname}}</span></span></div>

                  {{-- firstname --}}
                  <div class="firstname" style="position: absolute; border-bottom:solid 1px black; width:45.1%; float: right; padding-top:5px; top:20; margin-right:220px; height:20px"><span style="padding:10px; margin-top:2px">{{$first_name}}</span></div>

                  {{-- jr and sr --}}
                  <div class="jr-sr" style="position: absolute; border-left:solid 1px black; border-bottom:solid 1px black;border-left:solid 1px black;  width:30.5%; float: right;  top:20;  height:25px"><span style="position: absolute; padding-left:5px;padding-bottom:5px; font-size:9px">NAME EXTENSION (JR., SR) </span>
                    <span style="position:absolute; font-size:14px; padding-left:5px; padding-top:6px;">{{$name_extension}}</span>
                 
                  </div>

                  {{--     --}}
                  <div class="middle-name" style="position: absolute;  width:75.4%; float: right;  black; border-bottom:solid 1px; padding-top:5px; top:39.6; margin-right:1px; height:20px"><span style="padding:10px; margin-top:2px">{{$middle_name}}</span></div>
                 
                </div>
               

                {{-- dob --}}
                <div style="width:100%; position:relative; dob-container">
                  <div class="Dob" style="width:24.3%; border-right: solid 1px black; padding-top:3px; padding-bottom:3px; border-bottom:solid 1px black; background:rgba(228, 228, 228, 0.875);">
                    <span style="font-size:10px; padding-left:5px; font-family:Arial, Helvetica, sans-serif"> <span style="font-size:11px; font-family:Arial, Helvetica, sans-serif">3. </span>DATE OF BIRTH <br>
                           &nbsp; &nbsp; &nbsp; &nbsp;(mm/dd/yyyy)</span>
  
                  </div>
  
                  <div style="height:41px; border-right:solid 1px black; width:19.9%; margin-left:11.1rem; top:0; position:absolute; padding-top:10px;">
                          <span style="font-size:12px; padding-left:5px; font-family:Arial, Helvetica, sans-serif; ">{{$date_of_birth}}</span>
                  </div>
                </div>

                {{-- dob container --}}

                <div style="width:100%; position: relative;">
                  <div style="width:23.4%; border-right:solid 1px black;  padding-top:3px; padding-bottom:3px; padding-left:7px; background:rgba(228, 228, 228, 0.875); pob-container; ">
                 
                    
                  <span style="font-size: 11px; font-family:Arial, Helvetica, sans-serif ">   4. PLACE OF BIRTH</span>
               

                    <div style="position: absolute; height:20px; border-right:solid 1px black; border-top:solid 1px black;  width:19.1%; left:24.5%; top:-1px; right:10; padding: 3px 0px 5px 6px">
                      <span>{{$place_of_birth}}</span>
                 </div>

         </div>
                </div>


                {{-- sex --}}

                <div style="width:100%; position: relative;">
                  <div style="width:23.4%; border-right:solid 1px black; border-top:solid 1px black;   padding-top:3px; padding-bottom:3px; padding-left:7px; background:rgba(228, 228, 228, 0.875); sex-container; ">
                 
                    
                  <span style="font-size: 11px; font-family:Arial, Helvetica, sans-serif ">   5. SEX</span>
               

                    <div style="position: absolute; height:19px; border-right:solid 1px black; border-top:solid 1px black;  width:19.1%; left:24.5%; top:0px; right:10; padding: 3px 0px 5px 6px">
                      <span>{{$sex}}</span>
                 </div>

         </div>
                </div>



                {{-- civil status --}}

                <div style="width:100%; position: relative;">
                  <div style="width:23.4%; border-right:solid 1px black; border-top:solid 1px black;   padding-top:3px; padding-bottom:3px; padding-left:7px; background:rgba(228, 228, 228, 0.875); civil-container; ">
                 
                    
                  <span style="font-size: 11px; font-family:Arial, Helvetica, sans-serif ">   6. CIVIL STATUS</span>
               

                    <div style="position: absolute; height:19px; border-right:solid 1px black; border-top:solid 1px black;  width:19.1%; left:24.5%; top:0px; right:10; padding: 3px 0px 5px 6px">
                      <span>{{$civil_status}}</span>
                 </div>

         </div>
                </div>


                  {{-- height --}}
                  <div style="width:100%; position: relative;">
                    <div style="width:23.4%; border-right:solid 1px black; border-top:solid 1px black;   padding-top:3px; padding-bottom:3px; padding-left:7px; background:rgba(228, 228, 228, 0.875); height-container; ">
                   
                      
                    <span style="font-size: 11px; font-family:Arial, Helvetica, sans-serif ">   7. HEIGHT (m)</span>
                 
  
                      <div style="position: absolute; height:19px; border-right:solid 1px black; border-top:solid 1px black;  width:19.1%; left:24.5%; top:0px; right:10; padding: 3px 0px 5px 6px">
                        <span>{{$height}}</span>
                   </div>
  
           </div>
                  </div>

                      {{-- weight --}}

                      <div style="width:100%; position: relative;">
                        <div style="width:23.4%; border-right:solid 1px black; border-top:solid 1px black;   padding-top:3px; padding-bottom:3px; padding-left:7px; background:rgba(228, 228, 228, 0.875); weight-container; ">
                       
                          
                        <span style="font-size: 11px; font-family:Arial, Helvetica, sans-serif ">   8. WEIGHT (kg)</span>
                     
      
                          <div style="position: absolute; height:19px; border-right:solid 1px black; border-top:solid 1px black;  width:19.1%; left:24.5%; top:0px; right:10; padding: 3px 0px 5px 6px">
                            <span>{{$weight}}</span>
                       </div>
      
               </div>
                      </div>


                       {{-- blood type --}}

                       <div style="width:100%; position: relative;">
                        <div style="width:23.4%; border-right:solid 1px black; border-top:solid 1px black;   padding-top:3px; padding-bottom:3px; padding-left:7px; background:rgba(228, 228, 228, 0.875); blood-type-container; ">
                       
                          
                        <span style="font-size: 11px; font-family:Arial, Helvetica, sans-serif ">   9. BLOOD TYPE</span>
                     
      
                          <div style="position: absolute; height:19px; border-right:solid 1px black; border-top:solid 1px black;  width:19.1%; left:24.5%; top:0px; right:10; padding: 3px 0px 5px 6px">
                            <span>{{$blood_type}}</span>
                       </div>
      
               </div>
                      </div>


                        {{-- GSIS ID NO CONTAIINER --}}

                        <div style="width:100%; position: relative;">
                          <div style="width:23.4%; border-right:solid 1px black; border-top:solid 1px black;   padding-top:3px; padding-bottom:3px; padding-left:7px; background:rgba(228, 228, 228, 0.875); GSIS-ID-container; ">
                         
                            
                          <span style="font-size: 11px; font-family:Arial, Helvetica, sans-serif ">   10. GSIS ID NO.</span>
                       
        
                            <div style="position: absolute; height:19px; border-right:solid 1px black; border-top:solid 1px black;  width:19.1%; left:24.5%; top:0px; right:10; padding: 3px 0px 5px 6px">
                              <span>{{$gsis_no}}</span>
                         </div>
        
                 </div>
                        </div>

                        
                        {{-- PAGIBIG ID NO CONTAIINER --}}

                        <div style="width:100%; position: relative;">
                          <div style="width:23.4%; border-right:solid 1px black; border-top:solid 1px black;   padding-top:3px; padding-bottom:3px; padding-left:7px; background:rgba(228, 228, 228, 0.875); PAGIBIG-ID-container; ">
                         
                            
                          <span style="font-size: 11px; font-family:Arial, Helvetica, sans-serif ">   11. PAGIBIG ID NO.</span>
                       
        
                            <div style="position: absolute; height:19px; border-right:solid 1px black; border-top:solid 1px black;  width:19.1%; left:24.5%; top:0px; right:10; padding: 3px 0px 5px 6px">
                              <span>{{$pag_ibig_no}}</span>
                         </div>
        
                 </div>
                        </div>

                         {{-- PHILHEALHT  NO CONTAIINER --}}

                         <div style="width:100%; position: relative;">
                          <div style="width:23.4%; border-right:solid 1px black; border-top:solid 1px black;   padding-top:3px; padding-bottom:3px; padding-left:7px; background:rgba(228, 228, 228, 0.875); PHILHEALTH-container; ">
                         
                            
                          <span style="font-size: 11px; font-family:Arial, Helvetica, sans-serif ">   12. PHILHEALTH NO.</span>
                       
        
                            <div style="position: absolute; height:19px; border-right:solid 1px black; border-top:solid 1px black;  width:19.1%; left:24.5%; top:0px; right:10; padding: 3px 0px 5px 6px">
                              <span>{{$philhealth_no}}</span>
                         </div>
        
                 </div>
                        </div>
                          {{-- SSS  NO CONTAIINER --}}
                          <div style="width:100%; position: relative;">
                            <div style="width:23.4%; border-right:solid 1px black; border-top:solid 1px black;   padding-top:3px; padding-bottom:3px; padding-left:7px; background:rgba(228, 228, 228, 0.875); SSS-container; ">
                           
                              
                            <span style="font-size: 11px; font-family:Arial, Helvetica, sans-serif ">   13. SSS NO.</span>
                         
          
                              <div style="position: absolute; height:19px; border-right:solid 1px black; border-top:solid 1px black;  width:19.1%; left:24.5%; top:0px; right:10; padding: 3px 0px 5px 6px">
                                <span>{{$sss_no}}</span>
                           </div>
          
                   </div>
                          </div>


                            {{-- TIN  NO CONTAIINER --}}

                            <div style="width:100%; position: relative;">
                              <div style="width:23.4%; border-right:solid 1px black; border-top:solid 1px black;   padding-top:3px; padding-bottom:3px; padding-left:7px; background:rgba(228, 228, 228, 0.875); TIN-container; ">
                             
                                
                              <span style="font-size: 11px; font-family:Arial, Helvetica, sans-serif ">   14. TIN NO.</span>
                           
            
                                <div style="position: absolute; height:19px; border-right:solid 1px black; border-top:solid 1px black;  width:19.1%; left:24.5%; top:0px; right:10; padding: 3px 0px 5px 6px">
                                  <span>{{$tin_no}}</span>
                             </div>
            
                     </div>
                            </div>
  


                            
                            {{-- AGENCY EMPLOYEE  NO CONTAIINER --}}

                            <div style="width:100%; position: relative;">
                              <div style="width:23.4%; border-right:solid 1px black; border-top:solid 1px black;   padding-top:3px; padding-bottom:3px; padding-left:7px; background:rgba(228, 228, 228, 0.875); AGENCY-NO-container; ">
                             
                                
                              <span style="font-size: 11px; font-family:Arial, Helvetica, sans-serif ">   15. AGENCY EMPLOYEE NO.</span>
                           
            
                                <div style="position: absolute; height:19px; border-right:solid 1px black; border-top:solid 1px black;  width:19.1%; left:24.5%; top:0px; right:10; padding: 3px 0px 5px 6px">
                                  <span>{{$agency_employee_no}}</span>
                             </div>
            
                     </div>
                            </div>



                            {{-- CITIZENSHIP --}}
                            <div style="width:100%; position: absolute; top:22.3%; left:45%">
                              <div style="width:23.5%; border-top:solid 1px black;  padding-top:7px; padding-bottom:10px; padding-left:5px; background:rgba(228, 228, 228, 0.875); Citezenship-container; ">
                             
                                
                              <span style="font-size: 11px; font-family:Arial, Helvetica, sans-serif">  16. CITIZENSHIP</span>
                           
            
                           <div style="position: absolute; height:31px; border-right:solid 1px black; border-top:solid 1px black; border-left:solid 1px black; width:30%; left:24.3%; top:0; right:10; padding: 7px 0px 0px 6px">
                                <span>{{$citizenship}}</span>
                           </div>
            
                     </div>
                            </div>

                            {{-- country --}}

                            <div style="width:100%; position: absolute; top:25.4%; left:45%">
                              <div style="width:23.4%; border-right:solid 1px black; border-top:solid 1px black;  border-bottom:solid 1px black;    padding-top:3px; padding-bottom:3px; padding-left:7px; background:rgba(228, 228, 228, 0.875); TIN-container; ">
                             
                                
                              <span style="font-size: 11px; font-family:Arial, Helvetica, sans-serif ">   17. COUNTRY.</span>
                           
            
                                <div style="position: absolute; height:19px; border-right:solid 1px black; border-top:solid 1px black;  width:30%; left:24.5%; top:0px; right:10; padding: 3px 0px 5px 6px">
                                  <span>qweqwewq</span>
                             </div>
            
                     </div>
                            </div>


                            {{-- RESIDENTIAL ADDRESS --}}
                            <div style="width:100%; position: absolute; top:27.5%; left:44.9%;">
                              <div style="width:18%; border-right:solid 1px black; border-top:solid 1px black; height:111px; padding-left:7px; background:rgba(228, 228, 228, 0.875); TIN-container; ">
                             
                                
                              <span style="font-size: 9px; font-family:Arial, Helvetica, sans-serif;">   18. RESIDENTIAL ADDRESS.</span>
                           
                               
                              <span style="font-size: 9px; font-family:Arial, Helvetica, sans-serif; position: absolute; margin-left:-85px; margin-top:94px">   ZIP CODE</span>
            
                                <div style="position: absolute; height:22px; border:solid 1px black;  width:35.2%; left:19%; top:0px; right:10; padding: 3px 0px 5px 6px">
                                  <span style="font-size: 11px; font-family:Arial, Helvetica, sans-serif; position: absolute; hoouseblock ">qweqwewq</span>
                                  <span style="font-size: 11px; font-family:Arial, Helvetica, sans-serif; position: absolute; left:115; street ">qweqwewq</span>
                                 
                                 
                                       <span style="font-size: 10px; right:1px; top:17px; width:100%; position: absolute; border-top:solid 1px black; border-bottom:solid 1px black;"> &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; House/Block/Lot No. &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;  Street</span> 
                                  
                                 
                             </div>


                              {{-- subdi and barangay --}}

                             <div style="position: absolute; height:22px; border-bottom:solid 1px black;  border-right:solid 1px black;  border-left:solid 1px black; margin-top:30px;  width:35.2%; left:19%; top:0px; right:10; padding: 3px 0px 5px 6px">
                              <span style="font-size: 11px; font-family:Arial, Helvetica, sans-serif; position: absolute; hoouseblock ">qweqwewq</span>
                              <span style="font-size: 11px; font-family:Arial, Helvetica, sans-serif; position: absolute; left:115; street ">qweqwewq</span>
                             
                             
                                   <span style="font-size: 10px; right:1px; top:17px; width:100%; position: absolute; border-top:solid 1px black; border-bottom:solid 1px black;"> &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; Subdivision/Village &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;  Barangay</span> 
                              
                             
                         </div>


                           {{-- City province --}}

                           <div style="position: absolute; height:22px; border-bottom:solid 1px black;  border-right:solid 1px black;  border-left:solid 1px black; margin-top:60px;  width:35.2%; left:19%; top:0px; right:10; padding: 3px 0px 5px 6px">
                            <span style="font-size: 11px; font-family:Arial, Helvetica, sans-serif; position: absolute; hoouseblock ">qweqwewq</span>
                            <span style="font-size: 11px; font-family:Arial, Helvetica, sans-serif; position: absolute; left:115; street ">qweqwewq</span>
                           
                           
                                 <span style="font-size: 10px; right:1px; top:17px; width:100%; position: absolute; border-top:solid 1px black; border-bottom:solid 1px black;"> &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; City/Municipality &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;  Province</span> 
                            
                           
                       </div>


                       {{-- zip code --}}

                       <div style="position: absolute; height:13px; border-bottom:solid 1px black;  border-right:solid 1px black;  border-left:solid 1px black; margin-top:90px;  width:35.2%; left:19%; top:0px; right:10; padding: 5px 0px 3px 6px">
                        <span style="font-size: 11px; font-family:Arial, Helvetica, sans-serif; position: absolute; padding-bottom:5px; padding-left:10px; hoouseblock ">qweqwewq</span>
                        
                       
                       
                        
                       
                   </div>
            
                     </div>
                            </div>


                              {{-- permanent ADDRESS --}}
                              <div style="width:100%; position: absolute; top:36.4%; left:44.9%;">
                                <div style="width:18%; border-right:solid 1px black; border-top:solid 1px black; height:111px; padding-left:7px; background:rgba(228, 228, 228, 0.875); TIN-container; ">
                               
                                  
                                <span style="font-size: 9px; font-family:Arial, Helvetica, sans-serif;">   19. PERMANENT ADDRESS.</span>
                             
                                 
                                <span style="font-size: 9px; font-family:Arial, Helvetica, sans-serif; position: absolute; margin-left:-85px; margin-top:94px">   ZIP CODE</span>
              
                                  <div style="position: absolute; height:22px; border:solid 1px black;  width:35.2%; left:19%; top:0px; right:10; padding: 3px 0px 5px 6px">
                                    <span style="font-size: 11px; font-family:Arial, Helvetica, sans-serif; position: absolute; hoouseblock ">qweqwewq</span>
                                    <span style="font-size: 11px; font-family:Arial, Helvetica, sans-serif; position: absolute; left:115; street ">qweqwewq</span>
                                   
                                   
                                         <span style="font-size: 10px; right:1px; top:17px; width:100%; position: absolute; border-top:solid 1px black; border-bottom:solid 1px black;"> &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; House/Block/Lot No. &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;  Street</span> 
                                    
                                   
                               </div>
  
  
                                {{-- subdi and barangay --}}
  
                               <div style="position: absolute; height:22px; border-bottom:solid 1px black;  border-right:solid 1px black;  border-left:solid 1px black; margin-top:30px;  width:35.2%; left:19%; top:0px; right:10; padding: 3px 0px 5px 6px">
                                <span style="font-size: 11px; font-family:Arial, Helvetica, sans-serif; position: absolute; hoouseblock ">qweqwewq</span>
                                <span style="font-size: 11px; font-family:Arial, Helvetica, sans-serif; position: absolute; left:115; street ">qweqwewq</span>
                               
                               
                                     <span style="font-size: 10px; right:1px; top:17px; width:100%; position: absolute; border-top:solid 1px black; border-bottom:solid 1px black;"> &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; Subdivision/Village &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;  Barangay</span> 
                                
                               
                           </div>
  
  
                             {{-- City province --}}
  
                             <div style="position: absolute; height:22px; border-bottom:solid 1px black;  border-right:solid 1px black;  border-left:solid 1px black; margin-top:60px;  width:35.2%; left:19%; top:0px; right:10; padding: 3px 0px 5px 6px">
                              <span style="font-size: 11px; font-family:Arial, Helvetica, sans-serif; position: absolute; hoouseblock ">qweqwewq</span>
                              <span style="font-size: 11px; font-family:Arial, Helvetica, sans-serif; position: absolute; left:115; street ">qweqwewq</span>
                             
                             
                                   <span style="font-size: 10px; right:1px; top:17px; width:100%; position: absolute; border-top:solid 1px black; border-bottom:solid 1px black;"> &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; City/Municipality &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;  Province</span> 
                              
                             
                         </div>
  
  
                         {{-- zip code --}}
  
                         <div style="position: absolute; height:13px; border-bottom:solid 1px black;  border-right:solid 1px black;  border-left:solid 1px black; margin-top:90px;  width:35.2%; left:19%; top:0px; right:10; padding: 5px 0px 3px 6px">
                          <span style="font-size: 11px; font-family:Arial, Helvetica, sans-serif; position: absolute; padding-bottom:5px; padding-left:10px; hoouseblock ">qweqwewq</span>
                          
                         
                         
                          
                         
                     </div>
              
                       </div>
                              </div>

                               {{-- telephone no. --}}

                            <div style="width:100%; position: absolute; top:45.3%; left:45%">
                              <div style="width:23.4%; border-right:solid 1px black; border-top:solid 1px black;  border-bottom:solid 1px black; padding-top:1px; padding-bottom:1px; padding-left:7px; background:rgba(228, 228, 228, 0.875); TIN-container; ">
                             
                                
                              <span style="font-size: 10px; font-family:Arial, Helvetica, sans-serif ">   20. TELEPHONE NO.</span>
                           
            
                                <div style="position: absolute; height:19px; border-right:solid 1px black; border-top:solid 1px black; border-bottom:solid 1px black; font-size: 11px; font-family:Arial, Helvetica, sans-serif;  width:30%; left:24.5%; top:0px; right:10; padding: 1px 0px 1px 6px">
                                  <span style="font-size: 10px">qweqwewq</span>
                             </div>
            
                     </div>
                            </div>

                              {{-- mobile no. --}}
                            <div style="width:100%; position: absolute; top:47%; left:45%">
                              <div style="width:23.4%; border-right:solid 1px black; border-top:solid 1px black;      padding-top:1px; padding-bottom:1px; padding-left:7px; background:rgba(228, 228, 228, 0.875); TIN-container; ">
                             
                                
                              <span style="font-size: 10px; font-family:Arial, Helvetica, sans-serif ">   21. MOBILE NO.</span>
                           
            
                                <div style="position: absolute; height:19px; border-right:solid 1px black; border-top:solid 1px black; font-size: 11px; font-family:Arial, Helvetica, sans-serif;  width:30%; left:24.5%; top:0px; right:10; padding: 1px 0px 1px 6px">
                                  <span style="font-size: 10px">qweqwewq</span>
                             </div>
            
                     </div>
                            </div>

                              {{-- email address. --}}
                              <div style="width:100%; position: absolute; top:48.5%; left:45%">
                                <div style="width:23.4%; border-right:solid 1px black; border-top:solid 1px black;  border-bottom:solid 1px black;    padding-top:1px; padding-bottom:1px; padding-left:7px; background:rgba(228, 228, 228, 0.875); TIN-container; ">
                               
                                  
                                <span style="font-size: 10px; font-family:Arial, Helvetica, sans-serif ">   22. EMAIL ADDRESS.</span>
                             
              
                                  <div style="position: absolute; height:19px; border-right:solid 1px black; border-top:solid 1px black; border-bottom:solid 1px black; font-size: 11px; font-family:Arial, Helvetica, sans-serif;  width:30%; left:24.5%; top:0px; right:10; padding: 1px 0px 1px 6px">
                                    <span style="font-size: 10px">qweqwewq</span>
                               </div>
              

                       </div>

                       
                              </div>

                              

                              

                             



                              





                            








                        
  

               
             


 
         
    </div>


    {{-- family background --}}
    <div class="personal-info" style=" width:100%; border:solid 1px black; height:auto;">
      <div style="width:auto; display:flex; justify-content:center; align-items:center; padding:4px; background-color:rgb(158, 158, 158); ">
        <i style="font-family:Arial, Helvetica, sans-serif; font-size:15px; font-weight:700; color:white">II. FAMILY BACKGROUND</i>
      </div>


                <div class="try" style="width: 100%; height:auto; position:relative">
                  <div style="height:auto; width:23%; padding: 5px 0px 15px 9px; display:flex; flex-direction: column; border-bottom:1px solid black; border-right:1px solid black;  background:rgba(228, 228, 228, 0.875); ">
                    
                    <span style="font-size:11px; font-family:Arial, Helvetica, sans-serif"> 22. SPOUSE'S SURNAME</span> <br>
                   <span style="margin-left:0.8rem; font-size:11px; font-family:Arial, Helvetica, sans-serif; position: absolute; top:25; margin-bottom:20px">FIRST NAME</span> <br>
                    <span style="margin-left:0.8rem; font-size:11px; font-family:Arial, Helvetica, sans-serif; position: absolute; top:44">MIDDLE NAME</span> <br>
                  </div>


                  {{-- surname --}}
                  <div class="surname" style="position: absolute; border-bottom:solid 1px black; border-right:solid 1px black; width:29.6%; right:250; padding-top:5px; top:0; height:20px"><span style="padding:10px; margin-top:2px"><span style="padding:10px; margin-top:2px">{{$user_name}}</span></span></div>

                  {{-- firstname --}}
                  <div class="firstname" style="position: absolute; border-bottom:solid 1px black;  width:15.5%; right:162; padding-top:5px; top:20; margin-right:220px; height:20px"><span style="padding:10px; margin-top:2px">eiqweqweqw</span></div>

                  {{-- jr and sr --}}
                  <div class="jr-sr" style="position: absolute; border-left:solid 1px black; border-bottom:solid 1px black;border-left:solid 1px black; border-right:solid 1px black;  width:14%; left:216;  top:20;  height:25px"><span style="position: absolute; padding-left:5px;padding-bottom:5px; font-size:7px">NAME EXTENSION (JR., SR) </span>
                    <span style="position:absolute; font-size:12px; padding-left:5px; padding-top:6px;">qweuqwueqweqy</span>
                 
                  </div>

                  {{--     --}}
                  <div class="middle-name" style="position: absolute;  width:30.2%;  right:249;   border-bottom:solid 1px black; border-right:solid 1px black; padding-top:5px; top:39.6; margin-right:1px; height:20px"><span style="padding:10px; margin-top:2px">eiqweqweqw</span></div>
                 
                </div>
               

                  {{-- OCCUPATION  NO CONTAIINER --}}

                  <div style="width:100%; position: relative;">
                    <div style="width:23.3%; border-right:solid 1px black;  border-bottom:solid 1px black;   padding-top:3px; padding-bottom:3px; padding-left:7px; background:rgba(228, 228, 228, 0.875); AGENCY-NO-container; ">
                   
                      
                    <span style="font-size: 11px; font-family:Arial, Helvetica, sans-serif; margin-left:15px ">    OCCUPATION</span>
                 
  
                      <div style="position: absolute; height:19px; border-right:solid 1px black; border-top:solid 1px black;   width:28.7%; left:24.4%; top:0px; right:10; padding: 3px 0px 5px 6px">
                        <span>qweqwewq</span>
                   </div>
  
           </div>
                  </div>



                   {{-- Employers/business name  NO CONTAIINER --}}

                   <div style="width:100%; position: relative;">
                    <div style="width:23.3%; border-right:solid 1px black;  border-bottom:solid 1px black;   padding-top:3px; padding-bottom:3px; padding-left:7px; background:rgba(228, 228, 228, 0.875); AGENCY-NO-container; ">
                   
                      
                    <span style="font-size: 10px; font-family:Arial, Helvetica, sans-serif; margin-left:15px ">    EMPLOYER/BUSINESS NAME</span>
                 
  
                      <div style="position: absolute; height:19px; border-right:solid 1px black; border-top:solid 1px black;  ;  width:28.8%; left:24.3%; top:0px; right:10; padding: 3px 0px 5px 6px">
                        <span>qweqwewq</span>
                   </div>
  
           </div>
                  </div>



                  {{-- business address  NO CONTAIINER --}}

                  <div style="width:100%; position: relative;">
                    <div style="width:23.3%; border-right:solid 1px black;  border-bottom:solid 1px black;   padding-top:3px; padding-bottom:3px; padding-left:7px; background:rgba(228, 228, 228, 0.875); AGENCY-NO-container; ">
                   
                      
                    <span style="font-size: 10px; font-family:Arial, Helvetica, sans-serif; margin-left:15px ">    BUSINESS ADDRESS</span>
                 
  
                      <div style="position: absolute; height:19px; border-right:solid 1px black; border-top:solid 1px black;  ;  width:28.8%; left:24.3%; top:0px; right:10; padding: 3px 0px 5px 6px">
                        <span>qweqwewq</span>
                   </div>
  
           </div>
                  </div>



                    {{-- TELEPHONE  NO CONTAIINER --}}

                    <div style="width:100%; position: relative;">
                      <div style="width:23.3%; border-right:solid 1px black;  border-bottom:solid 1px black;   padding-top:3px; padding-bottom:3px; padding-left:7px; background:rgba(228, 228, 228, 0.875); AGENCY-NO-container; ">
                     
                        
                      <span style="font-size: 10px; font-family:Arial, Helvetica, sans-serif; margin-left:15px ">    TELEPHONE NO.</span>
                   
    
                        <div style="position: absolute; height:19px; border-right:solid 1px black; border-top:solid 1px black;  ;  width:28.8%; left:24.3%; top:0px; right:10; padding: 3px 0px 5px 6px">
                          <span>qweqwewq</span>
                     </div>
    
             </div>
                    </div>
  


                    {{-- FATHERS NAME --}}
                    <div class="try" style="width: 100%; height:auto; position:relative">
                      <div style="height:auto; width:23%; padding: 5px 0px 15px 9px; display:flex; flex-direction: column; border-bottom:1px solid black; border-right:1px solid black;  background:rgba(228, 228, 228, 0.875); ">
                        
                        <span style="font-size:11px; font-family:Arial, Helvetica, sans-serif"> 24. FATHER SURNAME</span> <br>
                       <span style="margin-left:0.8rem; font-size:11px; font-family:Arial, Helvetica, sans-serif; position: absolute; top:25; margin-bottom:20px">FIRST NAME</span> <br>
                        <span style="margin-left:0.8rem; font-size:11px; font-family:Arial, Helvetica, sans-serif; position: absolute; top:44">MIDDLE NAME</span> <br>
                      </div>
    
    
                      {{-- surname --}}
                      <div class="surname" style="position: absolute; border-bottom:solid 1px black; border-right:solid 1px black; border-top:solid 1px black; width:29.6%; right:250; padding-top:5px; top:0; height:20px"><span style="padding:10px; margin-top:2px"><span style="padding:10px; margin-top:2px">{{$user_name}}</span></span></div>
    
                      {{-- firstname --}}
                      <div class="firstname" style="position: absolute; border-bottom:solid 1px black;  width:15.5%; right:162; padding-top:5px; top:20; margin-right:220px; height:20px"><span style="padding:10px; margin-top:2px">eiqweqweqw</span></div>
    
                      {{-- jr and sr --}}
                      <div class="jr-sr" style="position: absolute; border-left:solid 1px black; border-bottom:solid 1px black;border-left:solid 1px black; border-right:solid 1px black;  width:14%; left:216;  top:20;  height:25px"><span style="position: absolute; padding-left:5px;padding-bottom:5px; font-size:7px">NAME EXTENSION (JR., SR) </span>
                        <span style="position:absolute; font-size:12px; padding-left:5px; padding-top:6px;">qweuqwueqweqy</span>
                     
                      </div>
    
                      {{--     --}}
                      <div class="middle-name" style="position: absolute;  width:30.2%;  right:249;   border-bottom:solid 1px black; border-right:solid 1px black; padding-top:5px; top:39.6; margin-right:1px; height:20px"><span style="padding:10px; margin-top:2px">eiqweqweqw</span></div>
                     
                    </div>


                       {{-- MOTEHERS NAME --}}
                       <div class="try" style="width: 100%; height:auto; position:relative">
                        <div style="height:auto; width:23%; padding: 5px 0px 24px 9px; display:flex; flex-direction: column; border-bottom:1px solid black;  background:rgba(228, 228, 228, 0.875); ">
                          
                          <span style="font-size:11px; font-family:Arial, Helvetica, sans-serif"> 25. MOTHER MAIDEN NAME</span> <br>
                         <span style="margin-left:0.8rem; font-size:11px; font-family:Arial, Helvetica, sans-serif; position: absolute; top:25; margin-bottom:20px">SURNAME</span> <br>
                          <span style="margin-left:0.8rem; font-size:11px; font-family:Arial, Helvetica, sans-serif; position: absolute; top:44">FIRST NAME</span> <br>
                          <span style="margin-left:0.8rem; font-size:11px; font-family:Arial, Helvetica, sans-serif; position: absolute; top:63">MIDDLE NAME</span> <br>
                        </div>
      
      
                        {{-- MAIDENS --}}
                        <div class="surname" style="position: absolute; border-bottom:solid 1px black; border-right:solid 1px black; border-top:solid 1px black; width:29.6%; right:250; padding-top:5px; top:0; height:20px; background:rgba(228, 228, 228, 0.875); "><span style="padding:10px; margin-top:2px"><span style="padding:10px; margin-top:2px"></span></span></div>
      
                        {{-- SURNAME --}}
                        <div class="firstname" style="position: absolute; border-bottom:solid 1px black; border-left:solid 1px black; border-right:solid 1px black;  width:29.6%; right:162; padding-top:5px; top:20; margin-right:117px; height:20px"><span style="padding:10px; margin-top:2px">eiqweqweqw</span></div>
      
                      
      
                        {{--  FIRST NAME   --}}
                        <div class="middle-name" style="position: absolute;  width:29.6%;  right:249; border-left:solid 1px black;   border-bottom:solid 1px black; border-right:solid 1px black; padding-top:5px; top:39.6; margin-right:1px; height:20px"><span style="padding:10px; margin-top:2px">eiqweqweqw</span></div>
                       
                          {{-- MIDDLE NAME --}}
                        <div class="middle-name" style="position: absolute;  width:29.6%;  right:249; border-left:solid 1px black;   border-bottom:solid 1px black; border-right:solid 1px black; padding-top:5px; top:59; margin-right:1px; height:23.5px"><span style="padding:10px; margin-top:2px">eiqweqweqw</span></div>

                      </div>
                   

   {{-- NAME OF CHILDREN  CONTAIINER --}}

   <div style="width:100%; position: absolute; bottom:426; left:295">
    <div style="width:30.3%; border-right:solid 1px black;  border-bottom:solid 1px black; border-left:solid 1px black;   padding-top:3px; padding-bottom:3px; padding-left:7px; background:rgba(228, 228, 228, 0.875); AGENCY-NO-container; ">
   
      
    <span style="font-size: 11px; font-family:Arial, Helvetica, sans-serif; margin-left:15px "> 23.   NAME OF CHILDREN</span>
 

      <div style="position: absolute; height:16px; border-right:solid 1px black; border-top:solid 1px black; border-bottom:solid 1px black;   width:13.6%; left:31.4%; top:0px; right:10; padding: 3px 0px 5px 6px">
        <span style="font-size: 8px; font-family:Arial, Helvetica, sans-serif; margin-left:11px">DATE OF BIRTH <br> <span style="position: absolute; margin-left:16px">(mm/dd/yyyy)</span></span>
   </div>


   
</div>
  </div>


  {{-- NAME OF CHILDREN  1 CONTAIINER --}}

  <div style="width:100%; position: absolute; bottom:183; left:295; height:auto;">

    <div style="width: auto; height:auto;">
      <div style="width:30.3%; border-right:solid 1px black;  border-top:solid 1px black;   border-bottom:solid 1px black; border-left:solid 1px black;   padding-top:3px; padding-bottom:3px; padding-left:7px;  AGENCY-NO-container; ">
   
      
        <span style="font-size: 10px; font-family:Arial, Helvetica, sans-serif; margin-left:3px ">  NAME OF CHILDREN no1</span>
     
    
          <div style="position: absolute; height:17px; border-right:solid 1px black; border-top:solid 1px black; border-bottom:solid 1px black;   width:13.6%; left:31.4%; top:.5px; right:10; padding: 3px 0px 5px 6px">
            <span style="font-size: 8px; font-family:Arial, Helvetica, sans-serif; margin-left:11px">DATE OF BIRTH </span>
       </div>
    
    
       
    </div>
    </div>





{{-- no.2 children --}}

<div style="width: auto; height:auto;">
  <div style="width:30.3%; border-right:solid 1px black;  border-top:solid 1px black;   border-bottom:solid 1px black; border-left:solid 1px black;   padding-top:3px; padding-bottom:3px; padding-left:7px;  AGENCY-NO-container; ">
   
      
    <span style="font-size: 10px; font-family:Arial, Helvetica, sans-serif; margin-left:3px ">   NAME OF CHILDREN no2</span>
  
  
      <div style="position: absolute; height:17px; border-right:solid 1px black; border-top:solid 1px black; border-bottom:solid 1px black;   width:13.6%; left:31.4%; top:27px; right:10; padding: 3px 0px 5px 6px">
        <span style="font-size: 8px; font-family:Arial, Helvetica, sans-serif; margin-left:11px">DATE OF BIRTH </span>
   </div>
  
  
   
  </div>
</div>



{{-- no.3 children --}}


<div style="width: auto; height:auto;">
  <div style="width:30.3%; border-right:solid 1px black;  border-top:solid 1px black;   border-bottom:solid 1px black; border-left:solid 1px black;   padding-top:3px; padding-bottom:3px; padding-left:7px;  AGENCY-NO-container; ">
   
      
    <span style="font-size: 10px; font-family:Arial, Helvetica, sans-serif; margin-left:3px ">  NAME OF CHILDREN no3</span>
  
  
    <div style="position: absolute; height:17px; border-right:solid 1px black; border-top:solid 1px black; border-bottom:solid 1px black;   width:13.6%; left:31.4%; top:54px; right:10; padding: 3px 0px 5px 6px">
      <span style="font-size: 8px; font-family:Arial, Helvetica, sans-serif; margin-left:11px">DATE OF BIRTH </span>
 </div>
  
  
   
  </div>
</div>

{{-- no.4 children --}}

<div style="width: auto; height:auto;">
  <div style="width:30.3%; border-right:solid 1px black;  border-top:solid 1px black;   border-bottom:solid 1px black; border-left:solid 1px black;   padding-top:3px; padding-bottom:3px; padding-left:7px;  AGENCY-NO-container; ">
   
      
    <span style="font-size: 10px; font-family:Arial, Helvetica, sans-serif; margin-left:3px ">  NAME OF CHILDREN no4</span>
  
  
    <div style="position: absolute; height:17px; border-right:solid 1px black; border-top:solid 1px black; border-bottom:solid 1px black;   width:13.6%; left:31.4%; top:81px; right:10; padding: 3px 0px 5px 6px">
      <span style="font-size: 8px; font-family:Arial, Helvetica, sans-serif; margin-left:11px">DATE OF BIRTH </span>
 </div>
  
  
   
  </div>
</div>


{{-- no.5 children --}}

<div style="width: auto; height:auto;">
  <div style="width:30.3%; border-right:solid 1px black;  border-top:solid 1px black;   border-bottom:solid 1px black; border-left:solid 1px black;   padding-top:3px; padding-bottom:3px; padding-left:7px;  AGENCY-NO-container; ">
   
      
    <span style="font-size: 10px; font-family:Arial, Helvetica, sans-serif; margin-left:3px ">  NAME OF CHILDREN no5</span>
  
  
    <div style="position: absolute; height:17px; border-right:solid 1px black; border-top:solid 1px black; border-bottom:solid 1px black;   width:13.6%; left:31.4%; top:108px; right:10; padding: 3px 0px 5px 6px">
      <span style="font-size: 8px; font-family:Arial, Helvetica, sans-serif; margin-left:11px">DATE OF BIRTH </span>
 </div>
  
  
   
  </div>
</div>



{{-- no.6 children --}}
<div style="width: auto; height:auto;">
  <div style="width:30.3%; border-right:solid 1px black;  border-top:solid 1px black;   border-bottom:solid 1px black; border-left:solid 1px black;   padding-top:3px; padding-bottom:3px; padding-left:7px;  AGENCY-NO-container; ">
   
      
    <span style="font-size: 10px; font-family:Arial, Helvetica, sans-serif; margin-left:3px ">  NAME OF CHILDREN no6</span>
  
  
    <div style="position: absolute; height:17px; border-right:solid 1px black; border-top:solid 1px black; border-bottom:solid 1px black;   width:13.6%; left:31.4%; top:135px; right:10; padding: 3px 0px 5px 6px">
      <span style="font-size: 8px; font-family:Arial, Helvetica, sans-serif; margin-left:11px">DATE OF BIRTH </span>
 </div>
  
  
   
  </div>
</div>


{{-- no.7 children --}}
<div style="width: auto; height:auto;">
  <div style="width:30.3%; border-right:solid 1px black;  border-top:solid 1px black;   border-bottom:solid 1px black; border-left:solid 1px black;   padding-top:3px; padding-bottom:3px; padding-left:7px;  AGENCY-NO-container; ">
   
      
    <span style="font-size: 10px; font-family:Arial, Helvetica, sans-serif; margin-left:3px ">  NAME OF CHILDREN no7</span>
  
  
    <div style="position: absolute; height:17px; border-right:solid 1px black; border-top:solid 1px black; border-bottom:solid 1px black;   width:13.6%; left:31.4%; top:162px; right:10; padding: 3px 0px 5px 6px">
      <span style="font-size: 8px; font-family:Arial, Helvetica, sans-serif; margin-left:11px">DATE OF BIRTH </span>
 </div>
  
  
   
  </div>
</div>

{{-- no.8 children --}}
<div style="width: auto; height:auto;">
  <div style="width:30.3%; border-right:solid 1px black;  border-top:solid 1px black;   border-bottom:solid 1px black; border-left:solid 1px black;   padding-top:3px; padding-bottom:3px; padding-left:7px;  AGENCY-NO-container; ">
   
      
    <span style="font-size: 10px; font-family:Arial, Helvetica, sans-serif; margin-left:3px ">  NAME OF CHILDREN no8</span>
  
  
    <div style="position: absolute; height:17px; border-right:solid 1px black; border-top:solid 1px black; border-bottom:solid 1px black;   width:13.6%; left:31.4%; top:189px; right:10; padding: 3px 0px 5px 6px">
      <span style="font-size: 8px; font-family:Arial, Helvetica, sans-serif; margin-left:11px">DATE OF BIRTH </span>
 </div>
  
  
   
  </div>
</div>


{{-- no.9 children --}}
<div style="width: auto; height:auto;">
  <div style="width:30.3%; border-right:solid 1px black;  border-top:solid 1px black;   border-bottom:solid 1px black; border-left:solid 1px black;   padding-top:3px; padding-bottom:3px; padding-left:7px;  AGENCY-NO-container; ">
   
      
    <span style="font-size: 10px; font-family:Arial, Helvetica, sans-serif; margin-left:3px ">  NAME OF CHILDREN no9</span>
  
  
    <div style="position: absolute; height:17px; border-right:solid 1px black; border-top:solid 1px black; border-bottom:solid 1px black;   width:13.6%; left:31.4%; top:216px; right:10; padding: 3px 0px 5px 6px">
      <span style="font-size: 8px; font-family:Arial, Helvetica, sans-serif; margin-left:11px">DATE OF BIRTH </span>
 </div>
  
  
   
  </div>
</div>


{{-- no.10 children --}}
<div style="width: auto; height:auto;">
  <div style="width:30.3%; border-right:solid 1px black;  border-top:solid 1px black;   border-bottom:solid 1px black; border-left:solid 1px black;   padding-top:3px; padding-bottom:3px; padding-left:7px;  AGENCY-NO-container; ">
   
      
    <span style="font-size: 10px; font-family:Arial, Helvetica, sans-serif; margin-left:3px ">  NAME OF CHILDREN no10</span>
  
  
    <div style="position: absolute; height:17px; border-right:solid 1px black; border-top:solid 1px black; border-bottom:solid 1px black;   width:13.6%; left:31.4%; top:243px; right:10; padding: 3px 0px 5px 6px">
      <span style="font-size: 8px; font-family:Arial, Helvetica, sans-serif; margin-left:11px">DATE OF BIRTH </span>
 </div>
  
  
   
  </div>
</div>


{{-- no.11 children --}}
<div style="width: auto; height:auto;">
  <div style="width:30.3%; border-right:solid 1px black;  border-top:solid 1px black;   border-bottom:solid 1px black; border-left:solid 1px black;   padding-top:3px; padding-bottom:3px; padding-left:7px;  AGENCY-NO-container; ">
   
      
    <span style="font-size: 10px; font-family:Arial, Helvetica, sans-serif; margin-left:3px ">  NAME OF CHILDREN no11</span>
  
  
    <div style="position: absolute; height:17px; border-right:solid 1px black; border-top:solid 1px black; border-bottom:solid 1px black;   width:13.6%; left:31.4%; top:270px; right:10; padding: 3px 0px 5px 6px">
      <span style="font-size: 8px; font-family:Arial, Helvetica, sans-serif; margin-left:11px">DATE OF BIRTH </span>
 </div>
  
  
   
  </div>
</div>

{{-- no.12 children --}}
<div style="width: auto; height:auto;">
  <div style="width:30.3%; border-right:solid 1px black;  border-top:solid 1px black;   border-bottom:solid 1px black; border-left:solid 1px black;   padding-top:3px; padding-bottom:3px; padding-left:7px;  AGENCY-NO-container; ">
   
      
    <span style="font-size: 10px; font-family:Arial, Helvetica, sans-serif; margin-left:3px ">  NAME OF CHILDREN no12</span>
  
  
    <div style="position: absolute; height:17px; border-right:solid 1px black; border-top:solid 1px black; border-bottom:solid 1px black;   width:13.6%; left:31.4%; top:297px; right:10; padding: 3px 0px 5px 6px">
      <span style="font-size: 8px; font-family:Arial, Helvetica, sans-serif; margin-left:11px">DATE OF BIRTH </span>
 </div>
  
  
   
  </div>
</div>




















  </div>




    </div>

    {{-- EDUCATIONAL BACKGROUND --}}

    <div class="personal-info" style=" width:100%; border:solid 1px black; height:auto;">

      <div style="width:auto; display:flex; justify-content:center; align-items:center; padding:4px; background-color:rgb(158, 158, 158); ">
        <i style="font-family:Arial, Helvetica, sans-serif; font-size:15px; font-weight:700; color:white">III. EDUCATIONAL BACKGROUND</i>
      </div>

      <div style=" width:100%; height:auto; display:flex; flex-direction:row; justify-content:center; align-items:center; position:relative">

        <div style="height:auto; width:15%; border-top:solid 2px black; border-bottom:solid 2px black;  border-right:solid 2px black; padding:5px 2px 10px 5px; position; background:rgba(228, 228, 228, 0.875);">
          <span style="font-size: 10px; font-family:Arial, Helvetica, sans-serif; ">LEVEL</span>
      </div>

      <div style=" width:100%; height:auto; ; display:flex; flex-direction:row; justify-content:center; align-items:center; ">

        <div style="height:auto; width:15%; border-top:solid 2px black; border-bottom:solid 2px black; border-right:solid 2px black;padding:3px 2px 3px 5px; position; background:rgba(228, 228, 228, 0.875);">
          <span style="font-size: 10px; font-family:Arial, Helvetica, sans-serif; ">ELEMENTARY</span>
      </div>


      <div style="height:auto; width:15%; border-top:solid 2px black; border-bottom:solid 2px black;; padding:3px 2px 3px 5px; position; background:rgba(228, 228, 228, 0.875);">
        <span style="font-size: 10px; font-family:Arial, Helvetica, sans-serif; ">SECONDARY</span>
    </div>

    
    <div style="height:auto; width:15%; border-top:solid 2px black; border-bottom:solid 2px black;; padding:2px 2px 2px 5px; position; background:rgba(228, 228, 228, 0.875);">
      <span style="font-size: 10px; font-family:Arial, Helvetica, sans-serif; ">VOCATIONAL/ TRADE COURSE</span>
  </div>

  <div style="height:auto; width:15%; border-top:solid 2px black; border-bottom:solid 2px black;; padding:3px 2px 3px 5px; position; background:rgba(228, 228, 228, 0.875);">
    <span style="font-size: 10px; font-family:Arial, Helvetica, sans-serif; ">COLLEGE</span>
</div>

<div style="height:auto; width:15%; border-top:solid 2px black; border-bottom:solid 2px black;; padding:3px 2px 3px 5px; position; background:rgba(228, 228, 228, 0.875);">
  <span style="font-size: 10px; font-family:Arial, Helvetica, sans-serif; ">GRADUATE STUDIES</span>
</div>


{{-- NAME OF SCHOOL --}}

<div style="height:auto; width:18%; border-top:solid 2px black; border-bottom:solid 2px black; border-right:solid 2px black; padding:5px 2px 8px 7px; position: absolute; top:0; left:88; background:rgba(228, 228, 228, 0.875);">
  <span style="font-size: 10px; font-family:Arial, Helvetica, sans-serif; ">NAME OF SCHOOL</span>
</div>


{{-- elementery  school name--}}
<div style="height:auto; width:18%; border-top:solid 2px black; border-bottom:solid 2px black;; padding:2px 2px 6px 7px; position: absolute; top:26; left:88; background:rgba(228, 228, 228, 0.875);">
  <span style="font-size: 10px; font-family:Arial, Helvetica, sans-serif; ">NAME OF SCHOOL</span>
</div>


{{-- secondary school name--}}
<div style="height:auto; width:18%; border-top:solid 2px black; border-bottom:solid 2px black;; padding:2px 2px 6px 7px; position: absolute; top:48; left:88; background:rgba(228, 228, 228, 0.875);">
  <span style="font-size: 10px; font-family:Arial, Helvetica, sans-serif; ">NAME OF SCHOOL</span>
</div>

{{-- vocational school name--}}
<div style="height:auto; width:18%; border-top:solid 2px black; border-bottom:solid 2px black;; padding:8px 2px 8px 7px; position: absolute; top:70; left:88; background:rgba(228, 228, 228, 0.875);">
  <span style="font-size: 10px; font-family:Arial, Helvetica, sans-serif; ">NAME OF SCHOOL</span>
</div>


{{-- college school name--}}
<div style="height:auto; width:18%; border-top:solid 2px black; border-bottom:solid 2px black;; padding:2px 2px 6px 7px; position: absolute; top:101; left:88; background:rgba(228, 228, 228, 0.875);">
  <span style="font-size: 10px; font-family:Arial, Helvetica, sans-serif; ">NAME OF SCHOOL</span>
</div>

{{-- graduates school name--}}
<div style="height:auto; width:18%; border-top:solid 2px black; border-bottom:solid 2px black;; padding:2px 2px 6px 7px; position: absolute; top:123; left:88; background:rgba(228, 228, 228, 0.875);">
  <span style="font-size: 10px; font-family:Arial, Helvetica, sans-serif; ">NAME OF SCHOOL</span>
</div>


{{-- basic education/degree/course --}}
<div style="height:auto; width:18%; border-top:solid 2px black; border-bottom:solid 2px black;  border-right:solid 2px black; padding: 2px 0px 1px 7px; position: absolute; top:0; left:194; background:rgba(228, 228, 228, 0.875);">
  <span style="font-size: 9px; font-family:Arial, Helvetica, sans-serif; ">BASIC EDUCATION
    DEGREE/COURSE</span>
</div>



{{-- basic graudates --}}



{{-- ELEMENTARY --}}
<div style="height:auto; width:18%; border-top:solid 2px black; border-bottom:solid 2px black; border-right:solid 2px black; padding:2px 2px 6px 7px; position: absolute; top:123; left:195; background:rgba(228, 228, 228, 0.875);">
  <span style="font-size: 10px; font-family:Arial, Helvetica, sans-serif; ">NAME OF SCHOOL</span>
</div>

{{-- secondary --}}
<div style="height:auto; width:18%; border-top:solid 2px black; border-bottom:solid 2px black; padding:2px 2px 6px 7px; position: absolute; top:101; left:195; background:rgba(228, 228, 228, 0.875);">
  <span style="font-size: 10px; font-family:Arial, Helvetica, sans-serif; ">NAME OF SCHOOL</span>
</div>

{{-- vocational --}}
<div style="height:auto; width:18%; border-top:solid 2px black; border-bottom:solid 2px black;; padding:8px 2px 8px 7px; position: absolute; top:70; left:195; background:rgba(228, 228, 228, 0.875);">
  <span style="font-size: 10px; font-family:Arial, Helvetica, sans-serif; ">NAME OF SCHOOL</span>
</div>

{{-- college --}}
<div style="height:auto; width:18%; border-top:solid 2px black; border-bottom:solid 2px black;; padding:2px 2px 6px 7px; position: absolute; top:48; left:195; background:rgba(228, 228, 228, 0.875);">
  <span style="font-size: 10px; font-family:Arial, Helvetica, sans-serif; ">NAME OF SCHOOL</span>
</div>


{{-- college --}}
<div style="height:auto; width:18%; border-top:solid 2px black; border-bottom:solid 2px black;; padding:2px 2px 6px 7px; position: absolute; top:26; left:195; background:rgba(228, 228, 228, 0.875);">
  <span style="font-size: 10px; font-family:Arial, Helvetica, sans-serif; ">NAME OF SCHOOL</span>
</div>


{{-- graduate --}}
<div style="height:auto; width:18%; border-top:solid 2px black; border-bottom:solid 2px black;; padding:2px 2px 6px 7px; position: absolute; top:123; left:195; background:rgba(228, 228, 228, 0.875);">
  <span style="font-size: 10px; font-family:Arial, Helvetica, sans-serif; ">NAME OF SCHOOL</span>
</div>

      


    

    </div>






    </div>
  
</body>
</html>