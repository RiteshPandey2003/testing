@extends('admin.adminlayouts.app')

@section('title', 'All buyers')

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
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="admin-dashboard-searchbar-radio-button-outer">
                                <div class="radio-button-admin-dashboard-outer">
                                    <form class="radio-button-admin-dashboard" action="">
                                        <div class="admin-dashboard-radio-button-input">
                                            <input type="radio" id="all" name="all" value="all" checked>
                                            <label class="admin-dashboard-radio-button-label" for="all">All</label>
                                        </div>
                                        <div class="admin-dashboard-radio-button-input">
                                            <input type="radio" id="Individual" name="all" value="Individual">
                                            <label class="admin-dashboard-radio-button-label" for="Individual">Individual</label>
                                        </div>
                                        <div class="admin-dashboard-radio-button-input">
                                            <input type="radio" id="company" name="all" value="company">
                                            <label class="admin-dashboard-radio-button-label" for="company">Company</label>
                                        </div>
                                    </form>
                                </div>
                                <div class="admin-dashboard-search-bar-outer">
                                    <form class="searchbar-admin-dashboard-outer" action="">
                                        <input type="text" placeholder="Search.." name="search" class="searchbar-admin-dashboard">
                                        <button class="searchbar-icon-admin-dashboard" type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                                <button class="back-button-for-rfq-buyer" onclick="exportData()" tabindex="-1" aria-disabled="true">
                                    Export
                                </button>
                            </div>
                            <div class="dashboard_product_list account_user_deails">
                                <div class="row d-block d-sm-flex justify-content-center justify-content-sm-between"></div>
                                <div class="order_table table-responsive">
                                    <table id="buyersTable" class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="heading-buyer-dashboard-recent-activity">S. No.</th>
                                                <th scope="col" class="heading-buyer-dashboard-recent-activity">NAME</th>
                                                <th scope="col" class="heading-buyer-dashboard-recent-activity">EMAIL</th>
                                                <th scope="col" class="heading-buyer-dashboard-recent-activity">PHONE NUMBER</th>
                                                <th scope="col" class="heading-buyer-dashboard-recent-activity">TYPE</th>
                                                <th scope="col" class="heading-buyer-dashboard-recent-activity">RFQ RAISED</th>
                                                <th scope="col" class="heading-buyer-dashboard-recent-activity">ORDERS</th>
                                                <th scope="col" class="heading-buyer-dashboard-recent-activity">ACTIONS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($buyers as $index => $buyer)
                                                <tr class="buyer-dashboard-recent-activity-table-outer">
                                                    <td class="buyer-dashboard-right-border">{{ $index + 1 }}</td>
                                                    <td class="buyer-dashboard-right-border">{{ $buyer->name }}</td>
                                                    <td class="buyer-dashboard-right-border">{{ $buyer->email }}</td>
                                                    <td class="buyer-dashboard-right-border">{{ $buyer->phone_number }}</td>
                                                    <td class="buyer-dashboard-right-border">{{ $buyer->type }}</td>
                                                    <td class="buyer-dashboard-right-border">{{ $buyer->rfq_raised }}</td>
                                                    <td class="buyer-dashboard-right-border">{{ $buyer->orders }}</td>
                                                    <td class="editing_list align-middle">
                                                        <ul>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="{{ route('admin.buyers.show', $buyer->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="View" aria-label="View"><i class="fa fa-eye"></i></a>


                                                            </li>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="edit-buyer/{{ $buyer->id }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" aria-label="Edit"><i class="fa fa-pen" aria-hidden="true"></i></a>
                                                            </li>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="#" onclick="confirmDelete({{ $buyer->id }})" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" aria-label="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            $('#buyersTable').DataTable();
    
            $('body').on('click', '.delete-button', function() {
                var buyerId = $(this).data('id');
                confirmDelete(buyerId);
            });
        });
    
        function confirmDelete(buyerId) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    deleteBuyer(buyerId);
                }
            })
        }
    
        function deleteBuyer(buyerId) {
            $.ajax({
                url: '/buyers/' + buyerId,
                type: 'DELETE',
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(result) {
                    Swal.fire(
                        'Deleted!',
                        'Buyer has been deleted.',
                        'success'
                    );
                    setTimeout(function() {
                        location.reload();
                    }, 2000); // Reload after 2 seconds
                },
                error: function(err) {
                    Swal.fire(
                        'Error!',
                        'An error occurred while deleting the buyer.',
                        'error'
                    );
                }
            });
        }
    
        function exportData() {
            // Implement export functionality
            alert('Export button clicked');
        }
    </script>
    
@endsection
