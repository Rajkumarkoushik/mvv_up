<?php
include 'includes/header.php';
?>
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Enquiries</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>S.no</th>
                                        <th>Name</th>
                                        <th>E-mail</th>
                                        <th>Mobile</th>
                                        <th>Message</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include "../includes/db_con.php";
                                    $contact_sel = mysqli_query($dbcon,"select * from tbl_contact_enquiries");
                                    $i = 1;
                                    while($contact_fetch = mysqli_fetch_array($contact_sel))
                                    { ?>
                                    <tr>
                                        <td><?php echo $i; ?></th>
                                        <td><?php echo $contact_fetch['contact_name'];?></td>
                                        <td><?php echo $contact_fetch['contact_email'];?></td>
                                        <td><?php echo $contact_fetch['contact_mobile'];?></td>
                                        <td><?php echo $contact_fetch['contact_message'];?></td>
                                        <td><button class="del-btn"
                                                onclick="DelContactEnquiry(<?php echo $contact_fetch['contact_id'];?>)"><i
                                                    class="fa fa-trash-o font-weight-bold del-icon"
                                                    aria-hidden="true"></i>
                                            </button></td>
                                    </tr>
                                    <?php $i++; } ?>
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

<?php
include 'includes/footer.php';
?>

<script>
function DelContactEnquiry(delId) {
    if (confirm('are you sure?')) {
        $.ajax({
            method: "post",
            url: "delete_contact_enquiry.php",
            data: {
                delId: delId
            },
            success: function(delete_response) {
                alert(delete_response)
            }
        })
    }
}
</script>