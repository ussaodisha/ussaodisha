<?= $this->extend('layout/admin') ?>

<?= $this->section('admin-content') ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Profile Page</h1>
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
</div>

<?php if(empty($profiledata[0]['profile_image']) || empty($profiledata[0]['City']) || empty($profiledata[0]['State'])) :?>
<div class="alert alert-info alert-dismissible fade show" role="alert">
    <strong>Reminder !</strong> Profile incomplete please fill remaining details !
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif; ?>

<?php if(session()->get('success')) :?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success</strong> <?= session()->get('success'); ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>             
<?php endif; ?>

<?php if(session()->get('unsuccess')) :?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Alert !</strong> <?= session()->get('unsuccess'); ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>             
<?php endif; ?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary">
            <?= ucwords($profiledata[0]['Name']).'  '.ucwords($profiledata[0]['Surname']); ?></h4>
    </div>
    <div class="card-body">
        <div class="profile-page">
            <form action="<?= base_url('/Admin/Update_profile'); ?>" method="Post" enctype="multipart/form-data" autocomplete="off">
            <div class="row m-0 p-0">
                <div class="col-sm-12 col-md-9 col-lg-9 p-0 d-flex justify-content-center">
                    <div class="profile-content">

                        <!-- profile form start here -->
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputName">First Name</label>
                                    <input type="text" class="form-control" name="first_name" id="inputName"
                                        value="<?= ucwords($profiledata[0]['Name']); ?>" placeholder="Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputLastname">Last Name</label>
                                    <input type="text" class="form-control" name="last_name" id="inputLastname"
                                        value="<?= ucwords($profiledata[0]['Surname']); ?>" placeholder="Surname">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputemail">Email</label>
                                <input type="email" class="form-control" id="inputemail"
                                    value="<?= $profiledata[0]['Email']?>" placeholder="Email" disabled>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputState">State</label>
                                    <select id="inputState" name="State" class="form-control">
                                        <?php if(!empty($profiledata[0]['State'])): ?>
                                            <option  selected><?= ucwords($profiledata[0]['State']); ?></option>
                                        <?php else : ?>
                                            <option  selected>Choose..</option>
                                        <?php endif ;?>
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                        <option value="Assam">Assam</option>
                                        <option value="Bihar">Bihar</option>
                                        <option value="Chandigarh">Chandigarh</option>
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                        <option value="Daman and Diu">Daman and Diu</option>
                                        <option value="Delhi">Delhi</option>
                                        <option value="Lakshadweep">Lakshadweep</option>
                                        <option value="Puducherry">Puducherry</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="Haryana">Haryana</option>
                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                        <option value="Jharkhand">Jharkhand</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="Kerala">Kerala</option>
                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Manipur">Manipur</option>
                                        <option value="Meghalaya">Meghalaya</option>
                                        <option value="Mizoram">Mizoram</option>
                                        <option value="Nagaland">Nagaland</option>
                                        <option value="Odisha">Odisha</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                        <option value="Sikkim">Sikkim</option>
                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                        <option value="Telangana">Telangana</option>
                                        <option value="Tripura">Tripura</option>
                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                        <option value="Uttarakhand">Uttarakhand</option>
                                        <option value="West Bengal">West Bengal</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputCity">City</label>
                                    <input type="text" name="City" class="form-control"
                                        value="<?= ucwords($profiledata[0]['City']); ?>" id="inputCity"
                                        placeholder="Input City">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputZip">Zip</label>
                                    <input type="text" name="Zip" class="form-control" value="<?= $profiledata[0]['Zip']?>"
                                        id="inputZip" placeholder="Zip">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-sm btn-primary">Update</button>
                        

                        <!-- profile form end here -->

                    </div>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3 d-flex flex-column align-items-center ">
                    <div class="profile-image">
                        <?php if(!empty($profiledata[0]['profile_image'])) :?>
                        <img id="blah" src="<?= base_url('Uploads/profiles/'.$profiledata[0]['profile_image']); ?>"
                            alt="">
                        <?php else: ?>
                        <img id="blah" src="<?= base_url('images/icons/man (1).svg'); ?>" alt="">
                        <?php endif; ?>

                    </div>

                    <div class="image-upload-panel mt-4 ">
                        <form runat="server">
                            <input type="file" name="imgfile" id="imgInp" accept="image/*">
                            <label for="imgInp">Choose a photo</label>
                            <input type="hidden" name="old_image" value="<?= $profiledata[0]['profile_image']; ?>">
                        </form>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection()?>