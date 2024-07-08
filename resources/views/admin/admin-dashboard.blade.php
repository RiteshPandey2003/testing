@extends('admin.adminlayouts.app')

@section('title', 'Admin dashboard')

@section('content')

<div class="dashboard_content_wrapper">
  <div class="dashboard dashboard_wrapper pr0-md">
    <div class="dashboard__sidebar">
      <div class="dashboard_sidebar_list">
        <div class="sidebar_list_item">
          <a href="admin-dashboard" class="items-center -is-active"><i class="fa fa-tachometer mr15"></i> Overview</a>
        </div>
       <!--  <div class="sidebar_list_item ">
          <a href="rfqs" class="items-center"><i class="fa fa-file-text mr15"></i> Buyer Management</a> -->
         
        <button class="dropdown-btn-admin-dashboard-sidebar"><i class="fa fa-file-text mr15"></i> Buyer Management
           <i class="fa fa-caret-down ml10"></i>
       </button>
      <div class="admin-dashboard-sdebar-dropdown-options">
       <a href="{{ route('admin.buyers.all') }}">- All Buyers</a>

       <!-- <a href="#">Link 2</a>
       <a href="#">Link 3</a> -->
      </div>

       <!--  </div> -->
        <!-- <div class="sidebar_list_item ">
          <a href="buyer-orders" class="items-center"><i class="fa fa-shopping-cart mr15"></i> Seller Management</a>
        </div> -->
         <button class="dropdown-btn-admin-dashboard-sidebar"><i class="fa fa-file-text mr15"></i> Seller Management
           <i class="fa fa-caret-down ml10"></i>
       </button>
      <div class="admin-dashboard-sdebar-dropdown-options">
       <a href="all-seller">- All Sellers</a>
       <!-- <a href="#">Link 2</a>
       <a href="#">Link 3</a> -->
      </div>
        <!-- <div class="sidebar_list_item ">
          <a href="#" class="items-center"><i class="fa fa-inr mr15"></i> Product Management</a>
        </div> -->
        <button class="dropdown-btn-admin-dashboard-sidebar"><i class="fa fa-inr mr15"></i> Product Management
           <i class="fa fa-caret-down ml10"></i>
       </button>
      <div class="admin-dashboard-sdebar-dropdown-options">
       <a href="all-buyer">- Category Lable1</a><br>
       <a href="all-buyer">- Category Lable2</a><br>
       <a href="all-buyer">- Category Lable3</a><br>
       <a href="all-buyer">- All Brands</a><br>
       <a href="all-buyer">- All Products</a>
       <!-- <a href="#">Link 2</a>
       <a href="#">Link 3</a> -->
      </div>
        <div class="sidebar_list_item ">
          <a href="#" class="items-center"><i class="fa fa-box mr15"></i>Commission</a>
        </div>
        <div class="sidebar_list_item ">
          <a href="#" class="items-center"><i class="fa fa-box mr15"></i>PO & Invoices List</a>
        </div>
        <div class="sidebar_list_item ">
          <a href="#" class="items-center"><i class="fa fa-bell mr15"></i>Notification</a>
        </div>
        <div class="sidebar_list_item ">
          <a href="#" class="items-center"><i class="fa fa-cog mr15"></i>Settings</a>
        </div> 
    <!--<div class="sidebar_list_item ">
          <a href="buyer-wishlist" class="items-center"><i class="fa fa-heart mr15"></i>Wishlist</a>
        </div>
        <div class="sidebar_list_item ">
          <a href="buyer-savings" class="items-center"><i class="fa fa-piggy-bank animated-icon mr15"></i>Savings</a>
        </div>
        <div class="sidebar_list_item ">
          <a href="buyer-saved-addresses" class="items-center"><i class="fa fa-map-marker-alt mr15"></i>Saved Addresses</a>
        </div>
        <div class="sidebar_list_item ">
          <a href="buyer-notifications" class="items-center"><i class="fa fa-bell mr15"></i>Notification</a>
        </div>
        <div class="sidebar_list_item ">
          <a href="buyer-settings" class="items-center"><i class="fa fa-cog mr15"></i>Settings</a>
        </div>-->

        <div class="chat-with-us-buyer-dashboard">
          <div class="chat-with-us-buyer-dashboard-image">
            <img src="images/buyer-dashboard/client.png">
          </div>

          <div class="chat-with-us-buyer-dashboard-text">
            <p>Need support on your order or have any enquiry?</p>
          </div>

          <button class="chat-with-us-button-dashboard">Chat with us</button>
        </div>
      
      </div>
    </div>

  <div class="dashboard__main pl0-md">
      <div class="dashboard__content bg-color-buyer-dashboard">         
       <div class="row buyerdashboard-overview-page-rfq-box-webview">
         <div class="col-lg-12">
           <div class="buyer-dashboard-icon-section" style="margin-bottom: 30px;">

            <div class="buyer-dashboard-icon-section-box">
              <div class="buyer-dashboard-icon-image">
                  <i class="fa fa-users"></i>
              </div>
              <div class="buyer-dashboard-icon-heading">
                  <h5>Total Buyers</h5>
                  <h2 id="totalBuyers">0</h2> <!-- This will be dynamically updated -->
              </div>
          </div>
          

          <div class="buyer-dashboard-icon-section-box">
               <div class="buyer-dashboard-icon-image">
                 <i class="fa fa-user-tie"></i>
               </div>
               <div class="buyer-dashboard-icon-heading">
                 <h5>Total Sellers</h5>
                 <h2>0</h2>
               </div>
             </div>

             <div class="buyer-dashboard-icon-section-box">
               <div class="buyer-dashboard-icon-image">
                 <i class="fa fa-file-alt"></i>
               </div>
               <div class="buyer-dashboard-icon-heading">
                 <h5>Total RFQ</h5>
                 <h2>0</h2>
               </div>
             </div>

             <div class="buyer-dashboard-icon-section-box">
               <div class="buyer-dashboard-icon-image">
                 <i class="fa fa-shopping-cart"></i>
               </div>
               <div class="buyer-dashboard-icon-heading">
                 <h5>Total Orders</h5>
                 <h2>0</h2>
               </div>
             </div>

           </div>

           <div class="buyer-dashboard-icon-section">

            <div class="buyer-dashboard-icon-section-box">
               <div class="buyer-dashboard-icon-image">
                 <i class="fa fa-inr"></i>
               </div>
               <div class="buyer-dashboard-icon-heading">
                 <h5>Total Order Value</h5>
                 <h2>0</h2>
               </div>
             </div>

             <div class="buyer-dashboard-icon-section-box">
               <div class="buyer-dashboard-icon-image">
                 <i class="fa fa-boxes"></i>
               </div>
               <div class="buyer-dashboard-icon-heading">
                 <h5>Products on Website</h5>
                 <h2>25</h2>
               </div>
             </div>

             <div class="buyer-dashboard-icon-section-box">
               <div class="buyer-dashboard-icon-image">
                 <i class="fa fa-tags"></i>
               </div>
               <div class="buyer-dashboard-icon-heading">
                 <h5>Total Brands Avilable</h5>
                 <h2>0</h2>
               </div>
             </div>

          <div class="buyer-dashboard-icon-section-box">
               <div class="buyer-dashboard-icon-image">
                 <i class="fa fa-chart-line"></i>
               </div>
               <div class="buyer-dashboard-icon-heading">
                 <h5>Total Profit</h5>
                 <h2>0</h2>
               </div>
             </div>

             <!--<div class="buyer-dashboard-icon-section-box">
               <div class="buyer-dashboard-icon-image">
                 <i class="fa fa-box"></i>
               </div>
               <div class="buyer-dashboard-icon-heading">
                 <h5>Total Orders</h5>
                 <h2>0</h2>
               </div>
             </div>

             <div class="buyer-dashboard-icon-section-box">
               <div class="buyer-dashboard-icon-image">
                 <i class="fa fa-piggy-bank"></i>
               </div>
               <div class="buyer-dashboard-icon-heading">
                 <h5>Total Order Value</h5>
                 <h2>0</h2>
               </div>
             </div> -->

           </div>

         </div>
       </div>

       <!--for-mobileview-code-start-->
        <div class="row buyerdashboard-overview-page-rfq-box-mobileview">
         <div class="col-lg-12">
           <div class="buyer-dashboard-icon-section">

             

             <div class="buyer-dashboard-icon-section-box">
               <div class="buyer-dashboard-icon-image">
                 <i class="fa fa-shopping-cart"></i>
               </div>
               <div class="buyer-dashboard-icon-heading">
                 <h5>Total Sellers</h5>
                 <h2>0</h2>
               </div>
             </div>
           </div>
            
            <div class="buyer-dashboard-icon-section">
             <div class="buyer-dashboard-icon-section-box">
               <div class="buyer-dashboard-icon-image">
                 <i class="fa fa-dollar-sign"></i>
               </div>
               <div class="buyer-dashboard-icon-heading">
                 <h5>Total RFQ</h5>
                 <h2>0</h2>
               </div>
             </div>

             <div class="buyer-dashboard-icon-section-box">
               <div class="buyer-dashboard-icon-image">
                 <i class="fa fa-box"></i>
               </div>
               <div class="buyer-dashboard-icon-heading">
                 <h5>Total Orders</h5>
                 <h2>0</h2>
               </div>
             </div>
           </div>

         <div class="buyer-dashboard-icon-section">
             <div class="buyer-dashboard-icon-section-box">
               <div class="buyer-dashboard-icon-image">
                 <i class="fa fa-piggy-bank"></i>
               </div>
               <div class="buyer-dashboard-icon-heading">
                 <h5>Total Order Value</h5>
                 <h2>0</h2>
               </div>
             </div>

           </div>
         </div>
       </div>
       <!--for-mobileview-code-end-->

       <div class="row">
         <div class="col-md-12 rfq-and-orders-buyer-outer">

          <div class="col-md-4">
            <div class="rfq-chart-buyer-dashboard-outer-box">
              <div class="buyer-dashboard-graph-heading">
                <h2>Total Buyer: 100</h2>
              </div>
              <div id="rfqchartone"></div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="rfq-chart-buyer-dashboard-outer-box">
              <div class="buyer-dashboard-graph-heading">
                <h2>Total Sellers: 100</h2>
              </div>
              <div id="rfqcharttwo"></div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="rfq-chart-buyer-dashboard-outer-box">
              <div class="buyer-dashboard-graph-heading">
                <h2>Total RFQ: 100</h2>
              </div>
              <div id="rfqchartthree"></div>
            </div>
          </div>

         <!-- <div class="col-md-8">
           <div class="orders-graph-buyer-dashboard-outer-box">
            <div class="buyer-dashboard-graph-heading">
            <h2>Orders: 0</h2>
          </div>
             <div id="weeklyorders"></div>
           </div>
         </div> -->

         </div>

         <div class="col-md-12 rfq-and-orders-buyer-outer">

          <!-- <div class="col-md-4">
            <div class="rfq-chart-buyer-dashboard-outer-box">
              <div class="buyer-dashboard-graph-heading">
                  <h2>Amount Spent</h2>
                </div>
                  <div id="gaugeChart"></div>
                  <div class="weekdays">
                      <span>Jan</span>
                      <span>Feb</span>
                      <span>Mar</span>
                      <span>Apr</span>
                      <span>May</span>
                      <span>June</span>                       
                  </div>
                  <div class="weekdays">
                    <span>July</span>
                    <span>Aug</span>
                    <span>Sep</span>
                    <span>Oct</span>
                    <span>Nov</span>
                    <span>Dec</span>
                  </div>
            </div>
          </div>

         <div class="col-md-4">
           <div class="orders-graph-buyer-dashboard-outer-box">
             
                <div class="">
                  <div class="buyer-dashboard-graph-heading">
                  <h2>Product Ordered</h2>
                </div>
                  <p>Last 6 Months</p>
                  <h3>₹54656</h3>
                  <div id="barChart"></div>
              </div>
      
           </div>
         </div> -->

         <div class="col-md-4">
           <div class="rfq-chart-buyer-dashboard-outer-box">
            <div class="buyer-dashboard-graph-heading">
            <h2>Total Orders: 10</h2>
          </div>
             <div id="adminweeklyorders"></div>
           </div>
         </div>

         <div class="col-md-4">
           <div class="rfq-chart-buyer-dashboard-outer-box">
            <div class="buyer-dashboard-graph-heading">
             <h2>Total Order Value</h2>
            </div>
             <div id="savingsTracker"></div>
              <div class="weekdays">
                      <span>Jan</span>
                      <span>Feb</span>
                      <span>Mar</span>
                      <span>Apr</span>
                      <span>May</span>
                      <span>June</span>                       
                  </div>
            <!-- <div class="savingstracker-month">
              <span data-info="31 days">Jan<div class="tooltip">31 days</div></span>
               <span data-info="28/29 days">Feb<div class="tooltip">28/29 days</div></span>
                <span data-info="31 days">Mar<div class="tooltip">31 days</div></span>
                <span data-info="30 days">Apr<div class="tooltip">30 days</div></span>
               <span data-info="31 days">May<div class="tooltip">31 days</div></span>
              <span data-info="30 days">June<div class="tooltip">30 days</div></span>
            </div> -->
           </div>
         </div>

         <div class="col-md-4">
            <div class="rfq-chart-buyer-dashboard-outer-box">
              <div class="buyer-dashboard-graph-heading">
                <h2>Total Profit: 100</h2>
              </div>
              <div id="rfqchartfour"></div>
            </div>
          </div>

         </div>
       </div>


         <div class="row">
          <div class="col-xl-12">
            <h4 style="color: #fff;">Notifications</h4>
            <div class="dashboard_product_list account_user_deails">
              <div class="row d-block d-sm-flex justify-content-center justify-content-sm-between">
              
              </div>
              <div class="order_table table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                  <th scope="col" class="heading-buyer-dashboard-recent-activity">S. No.</th>
                <th scope="col" class="heading-buyer-dashboard-recent-activity">Activity</th>
                  <th scope="col" class="heading-buyer-dashboard-recent-activity">Date</th>
                  <th scope="col" class="heading-buyer-dashboard-recent-activity">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="buyer-dashboard-recent-activity-table-outer">
                      <td class="buyer-dashboard-right-border">01</td>
                      <td class="buyer-dashboard-right-border">Payment Updated</td>          <td class="buyer-dashboard-right-border">Aug 15, 2022</td>
                      <td class="editing_list align-middle">
                        <ul>
                          <li class="list-inline-item mb-1">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="View" data-bs-original-title="View" aria-label="View"><i class="fa fa-eye"></i></a>
                          </li>
                          <li class="list-inline-item mb-1">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-bs-original-title="Delete" aria-label="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                          </li>
                        </ul>
                      </td>
                    </tr>

                    <tr class="buyer-dashboard-recent-activity-table-outer">
                      <td class="buyer-dashboard-right-border">02</td>
                      <td class="buyer-dashboard-right-border">Payment Updated</td>          
                      <td class="buyer-dashboard-right-border">Aug 15, 2022</td>
                      <td class="editing_list align-middle">
                        <ul>
                           <li class="list-inline-item mb-1">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="View" data-bs-original-title="View" aria-label="View"><i class="fa fa-eye"></i></a>
                          </li>
                          <li class="list-inline-item mb-1">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-bs-original-title="Delete" aria-label="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                          </li>
                        </ul>
                      </td>
                    </tr>

                    <tr class="buyer-dashboard-recent-activity-table-outer">
                      <td class="buyer-dashboard-right-border">03</td>
                      <td class="buyer-dashboard-right-border">Payment Updated</td>         
                      <td class="buyer-dashboard-right-border">Aug 15, 2022</td>
                      <td class="editing_list align-middle">
                        <ul>
                           <li class="list-inline-item mb-1">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="View" data-bs-original-title="View" aria-label="View"><i class="fa fa-eye"></i></a>
                          </li>
                          <li class="list-inline-item mb-1">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-bs-original-title="Delete" aria-label="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                          </li>
                        </ul>
                      </td>
                    </tr>

                    <tr class="buyer-dashboard-recent-activity-table-outer">
                      <td class="buyer-dashboard-right-border">04</td>
                      <td class="buyer-dashboard-right-border">Payment Updated</td>         
                      <td class="buyer-dashboard-right-border">Aug 15, 2022</td>
                      <td class="editing_list align-middle">
                        <ul>
                          <li class="list-inline-item mb-1">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="View" data-bs-original-title="View" aria-label="View"><i class="fa fa-eye"></i></a>
                          </li>
                          <li class="list-inline-item mb-1">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-bs-original-title="Delete" aria-label="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                          </li>
                        </ul>
                      </td>
                    </tr>   
                    
                  </tbody>
                </table>
              </div>
           
            </div>
          </div>
@endsection
<script>
  $(document).ready(function() {
      fetchTotalBuyersCount();

      function fetchTotalBuyersCount() {
          $.ajax({
              url: "{{ route('admin.buyers.count') }}",
              method: 'GET',
              success: function(data) {
                  $('#totalBuyers').text(data.count);
              },
              error: function(err) {
                  console.error('Error fetching total buyers count:', err);
              }
          });
      }

      function exportData() {
          // Implement export functionality
          alert('Export button clicked');
      }
  });
</script>

<script>
  var dropdown = document.getElementsByClassName(".dropdown-btn-admin-dashboard-sidebar");
  var i;
  
  for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var dropdownContent = this.nextElementSibling;
      if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
      } else {
        dropdownContent.style.display = "block";
      }
    });
  }
  </script>