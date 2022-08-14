<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Employee */

$this->title = $model->person_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Employees'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="row" id="user-profile">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="wideget-user">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="wideget-user-desc d-flex">
                                <div class="wideget-user-img">
                                    <img class="" src="<?= $this->theme->baseUrl ?>/assets/images/users/8.jpg"
                                         alt="img">
                                </div>
                                <div class="user-wrap">
                                    <h4><?= $model->person_name ?></h4>
                                    <h6 class="text-muted mb-3">Member
                                        Since: <?= date('d-m-Y', strtotime($model->created_time)) ?></h6>
                                    <a href="#" class="btn btn-primary mt-1 mb-1"><i class="fa fa-rss"
                                                                                     aria-hidden="true"></i> Follow</a>
                                    <a href="emailservices.html" class="btn btn-secondary mt-1 mb-1"
                                       aria-hidden="true"></i><i class="fa fa-envelope" aria-hidden="true"></i>
                                        E-mail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="text-xl-right mt-4 mt-xl-0">
                                <?= Html::a('<i class="fa fa-pencil"></i> ' . Yii::t('app', 'Edit Profile'), ['update', 'id' => $model->person_id], ['class' => 'btn btn-primary btn-sm']) ?>
                                <?= Html::a('<i class="fa fa-trash"></i> ' . Yii::t('app', 'Delete'), ['delete', 'id' => $model->person_id], [
                                        'class' => 'btn btn-danger btn-sm ms-2',
                                        'data' => [
                                                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                                                'method' => 'post',
                                        ],
                                ]) ?>
                            </div>
                            <div class="mt-5">
                                <div class="main-profile-contact-list float-md-end d-md-flex">
                                    <div class="me-5">
                                        <div class="media">
                                            <div class="media-icon bg-primary  me-3 mt-1">
                                                <i class="fe fe-file-plus fs-20 text-white" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body">
                                                <span class="text-muted">Posts</span>
                                                <div class="fw-semibold fs-25">
                                                    328
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="me-5 mt-5 mt-md-0">
                                        <div class="media">
                                            <div class="media-icon bg-success me-3 mt-1">
                                                <i class="fe fe-users  fs-20 text-white" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body">
                                                <span class="text-muted">Followers</span>
                                                <div class="fw-semibold fs-25">
                                                    937k
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="me-0 mt-5 mt-md-0">
                                        <div class="media">
                                            <div class="media-icon bg-orange me-3 mt-1">
                                                <i class="fe fe-wifi fs-20 text-white" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body">
                                                <span class="text-muted">Following</span>
                                                <div class="fw-semibold fs-25">
                                                    2,876
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-top">
                <div class="wideget-user-tab">
                    <div class="tab-menu-heading">
                        <div class="tabs-menu1">
                            <ul class="nav">
                                <li class=""><a href="#tab-51" class="active show" data-bs-toggle="tab">Profile</a></li>
                                <li><a href="#tab-61" data-bs-toggle="tab" class="">Friends</a></li>
                                <li><a href="#tab-71" data-bs-toggle="tab" class="">Gallery</a></li>
                                <li><a href="#tab-81" data-bs-toggle="tab" class="">Followers</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content">
            <div class="tab-pane active show" id="tab-51">
                <div id="profile-log-switch">
                    <div class="card">
                        <div class="card-body">
                            <div class="media-heading">
                                <h5><strong>Personal Information</strong></h5>
                            </div>
                            <div class="table-responsive ">
                                <table class="table row table-borderless" role="presentation">
                                    <tbody class="col-lg-12 col-xl-6">
                                    <tr>
                                        <td>
                                            <strong><?= \app\models\Employee::instance()->getAttributeLabel('employee_id') ?> </strong>
                                        </td>
                                        <td>:</td>
                                        <td><?= $model->employee_id ?></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong><?= \app\models\Employee::instance()->getAttributeLabel('person_name') ?></strong>
                                        </td>
                                        <td>:</td>
                                        <td><?= $model->person_name ?></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong><?= \app\models\Employee::instance()->getAttributeLabel('date_of_birth') ?> </strong>
                                        </td>
                                        <td>:</td>
                                        <td><?= date('d-m-Y', strtotime($model->date_of_bird)) ?></td>
                                    </tr>
                                    </tbody>
                                    <tbody class="col-lg-12 col-xl-6">
                                    <tr>
                                        <td>
                                            <strong><?= \app\models\Employee::instance()->getAttributeLabel('phone') ?></strong>
                                        </td>
                                        <td>:</td>
                                        <td><?= $model->phone ?></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong><?= \app\models\Employee::instance()->getAttributeLabel('phone') ?></strong>
                                        </td>
                                        <td>:</td>
                                        <td><?= $model->email ?></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong><?= \app\models\Employee::instance()->getAttributeLabel('address') ?></strong>
                                        </td>
                                        <td>:</td>
                                        <td><?= $model->address ?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row profie-img">
                                <div class="col-md-12">
                                    <div class="media-heading">
                                        <h5><strong>Biography</strong></h5>
                                    </div>
                                    <p>
                                        Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo
                                        minus id quod maxime placeat facere possimus, omnis voluptas assumenda est,
                                        omnis dolor repellendus</p>
                                    <p class="mb-0">because it is pleasure, but because those who do not know how to
                                        pursue pleasure rationally encounter but because those who do not know how to
                                        pursue consequences that are extremely painful. Nor again is there anyone who
                                        loves or pursues or desires to obtain pain of itself, because it is pain, but
                                        because occasionally circumstances occur in which toil and pain can procure him
                                        some great pleasure.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="tab-61">
                <ul class="widget-users row  mb-5">
                    <li class="col-lg-4  col-md-6 col-sm-12 col-12">
                        <div class="card border p-0">
                            <a href="profile.html">
                                <div class="card-body text-center">
                                    <span class="avatar avatar-xxl brround cover-image"
                                          data-bs-image-src="<?= $this->theme->baseUrl ?>/assets/images/users/15.jpg"
                                          style="background: url(<?= $this->theme->baseUrl ?>/assets/images/users/15.jpg&quot;) center center;"></span>
                                    <h4 class="fs-16 mb-0 mt-3 text-dark fw-semibold">James Thomas</h4>
                                    <span class="text-muted">Web designer</span>
                                </div>
                            </a>
                            <div class="card-footer text-center">
                                <div class="row user-social-detail">
                                    <a href="#" class="social-profile me-4 rounded text-center">
                                        <i class="fa fa-google" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" class="social-profile me-4 rounded text-center">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" class="social-profile  rounded text-center">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card border p-0">
                            <a href="profile.html">
                                <div class="card-body text-center">
                                    <span class="avatar avatar-xxl brround cover-image"
                                          data-bs-image-src="<?= $this->theme->baseUrl ?>/assets/images/users/9.jpg"
                                          style="background: url(<?= $this->theme->baseUrl ?>/assets/images/users/9.jpg&quot;) center center;"></span>
                                    <h4 class="fs-16 mb-0 mt-3 text-dark fw-semibold">George Clooney</h4>
                                    <span class="text-muted">Web designer</span>
                                </div>
                            </a>
                            <div class="card-footer text-center">
                                <div class="row user-social-detail">
                                    <a href="#" class="social-profile me-4 rounded text-center">
                                        <i class="fa fa-google" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" class="social-profile me-4 rounded text-center">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" class="social-profile  rounded text-center">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card border p-0">
                            <a href="profile.html">
                                <div class="card-body text-center">
                                    <span class="avatar avatar-xxl brround cover-image"
                                          data-bs-image-src="<?= $this->theme->baseUrl ?>/assets/images/users/20.jpg"
                                          style="background: url(<?= $this->theme->baseUrl ?>/assets/images/users/20.jpg&quot;) center center;"></span>
                                    <h4 class="fs-16 mb-0 mt-3 text-dark fw-semibold">Robert Downey Jr.</h4>
                                    <span class="text-muted">Web designer</span>
                                </div>
                            </a>
                            <div class="card-footer text-center">
                                <div class="row user-social-detail">
                                    <a href="#" class="social-profile me-4 rounded text-center">
                                        <i class="fa fa-google" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" class="social-profile me-4 rounded text-center">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" class="social-profile  rounded text-center">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card border p-0 mb-lg-0">
                            <a href="profile.html">
                                <div class="card-body text-center">
                                    <span class="avatar avatar-xxl brround cover-image"
                                          data-bs-image-src="<?= $this->theme->baseUrl ?>/assets/images/users/12.jpg"
                                          style="background: url(<?= $this->theme->baseUrl ?>/assets/images/users/12.jpg&quot;) center center;"></span>
                                    <h4 class="fs-16 mb-0 mt-3 text-dark fw-semibold">Emma Watson</h4>
                                    <span class="text-muted">Web designer</span>
                                </div>
                            </a>
                            <div class="card-footer text-center">
                                <div class="row user-social-detail">
                                    <a href="#" class="social-profile me-4 rounded text-center">
                                        <i class="fa fa-google" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" class="social-profile me-4 rounded text-center">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" class="social-profile  rounded text-center">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card border p-0 mb-lg-0">
                            <a href="profile.html">
                                <div class="card-body text-center">
                                    <span class="avatar avatar-xxl brround cover-image"
                                          data-bs-image-src="<?= $this->theme->baseUrl ?>/assets/images/users/4.jpg"
                                          style="background: url(<?= $this->theme->baseUrl ?>/assets/images/users/4.jpg&quot;) center center;"></span>
                                    <h4 class="fs-16 mb-0 mt-3 text-dark fw-semibold">Mila Kunis</h4>
                                    <span class="text-muted">Web designer</span>
                                </div>
                            </a>
                            <div class="card-footer text-center">
                                <div class="row user-social-detail">
                                    <a href="#" class="social-profile me-4 rounded text-center">
                                        <i class="fa fa-google" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" class="social-profile me-4 rounded text-center">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" class="social-profile  rounded text-center">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card border p-0 mb-0">
                            <div class="card-body text-center">
                                <span class="avatar avatar-xxl brround cover-image"
                                      data-bs-image-src="<?= $this->theme->baseUrl ?>/assets/images/users/6.jpg"
                                      style="background: url(<?= $this->theme->baseUrl ?>/assets/images/users/6.jpg&quot;) center center;"></span>
                                <a href="profile.html"><h4 class="fs-16 mb-0 mt-3 text-dark fw-semibold">Ryan
                                        Gossling</h4></a>
                                <span class="text-muted">Web designer</span>
                            </div>
                            <div class="card-footer text-center">
                                <div class="row user-social-detail">
                                    <a href="#" class="social-profile me-4 rounded text-center">
                                        <i class="fa fa-google" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" class="social-profile me-4 rounded text-center">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" class="social-profile  rounded text-center">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="tab-pane" id="tab-71">
                <div class="row  mb-5 img-gallery" id="lightgallery" lg-uid="lg0">
                    <div class="col-lg-3 col-md-6"
                         data-responsive="<?= $this->theme->baseUrl ?>/assets/images/media/8.jpg"
                         data-src="<?= $this->theme->baseUrl ?>/assets/images/media/8.jpg" lg-event-uid="&amp;1">
                        <a href="#"><img class="img-fluid mb-2 br-7"
                                         src="<?= $this->theme->baseUrl ?>/assets/images/media/8.jpg "
                                         alt="banner image"></a>
                    </div>
                    <div class="col-lg-3 col-md-6"
                         data-responsive="<?= $this->theme->baseUrl ?>/assets/images/media/10.jpg"
                         data-src="<?= $this->theme->baseUrl ?>/assets/images/media/10.jpg" lg-event-uid="&amp;2">
                        <a href="#"><img class="img-fluid mb-2 br-7"
                                         src="<?= $this->theme->baseUrl ?>/assets/images/media/10.jpg"
                                         alt="banner image "></a>
                    </div>
                    <div class="col-lg-3 col-md-6"
                         data-responsive="<?= $this->theme->baseUrl ?>/assets/images/media/11.jpg"
                         data-src="<?= $this->theme->baseUrl ?>/assets/images/media/11.jpg" lg-event-uid="&amp;3">
                        <a href="#"><img class="img-fluid  mb-2 br-7"
                                         src="<?= $this->theme->baseUrl ?>/assets/images/media/11.jpg"
                                         alt="banner image "></a>
                    </div>
                    <div class="col-lg-3 col-md-6"
                         data-responsive="<?= $this->theme->baseUrl ?>/assets/images/media/12.jpg"
                         data-src="<?= $this->theme->baseUrl ?>/assets/images/media/12.jpg" lg-event-uid="&amp;4">
                        <a href="#"><img class="img-fluid  mb-2 br-7"
                                         src="<?= $this->theme->baseUrl ?>/assets/images/media/12.jpg"
                                         alt="banner image "></a>
                    </div>
                    <div class="col-lg-3 col-md-6"
                         data-responsive="<?= $this->theme->baseUrl ?>/assets/images/media/13.jpg"
                         data-src="<?= $this->theme->baseUrl ?>/assets/images/media/13.jpg" lg-event-uid="&amp;5">
                        <a href="#"><img class="img-fluid  mb-2 br-7"
                                         src="<?= $this->theme->baseUrl ?>/assets/images/media/13.jpg "
                                         alt="banner image"></a>
                    </div>
                    <div class="col-lg-3 col-md-6"
                         data-responsive="<?= $this->theme->baseUrl ?>/assets/images/media/14.jpg"
                         data-src="<?= $this->theme->baseUrl ?>/assets/images/media/14.jpg" lg-event-uid="&amp;6">
                        <a href="#"><img class="img-fluid  mb-2 br-7"
                                         src="<?= $this->theme->baseUrl ?>/assets/images/media/14.jpg "
                                         alt="banner image"></a>
                    </div>
                    <div class="col-lg-3 col-md-6"
                         data-responsive="<?= $this->theme->baseUrl ?>/assets/images/media/15.jpg"
                         data-src="<?= $this->theme->baseUrl ?>/assets/images/media/15.jpg" lg-event-uid="&amp;7">
                        <a href="#"><img class="img-fluid mb-2 br-7"
                                         src="<?= $this->theme->baseUrl ?>/assets/images/media/15.jpg "
                                         alt="banner image"></a>
                    </div>
                    <div class="col-lg-3 col-md-6"
                         data-responsive="<?= $this->theme->baseUrl ?>/assets/images/media/16.jpg"
                         data-src="<?= $this->theme->baseUrl ?>/assets/images/media/16.jpg" lg-event-uid="&amp;8">
                        <a href="#"><img class="img-fluid mb-0 br-7"
                                         src="<?= $this->theme->baseUrl ?>/assets/images/media/16.jpg "
                                         alt="banner image"></a>
                    </div>
                    <div class="col-lg-3 col-md-6"
                         data-responsive="<?= $this->theme->baseUrl ?>/assets/images/media/17.jpg"
                         data-src="<?= $this->theme->baseUrl ?>/assets/images/media/17.jpg" lg-event-uid="&amp;9">
                        <a href="#"><img class="img-fluid mb-0 br-7"
                                         src="<?= $this->theme->baseUrl ?>/assets/images/media/17.jpg "
                                         alt="banner image"></a>
                    </div>
                    <div class="col-lg-3 col-md-6"
                         data-responsive="<?= $this->theme->baseUrl ?>/assets/images/media/18.jpg"
                         data-src="<?= $this->theme->baseUrl ?>/assets/images/media/18.jpg" lg-event-uid="&amp;10">
                        <a href="#"><img class="img-fluid mb-0 br-7"
                                         src="<?= $this->theme->baseUrl ?>/assets/images/media/18.jpg "
                                         alt="banner image"></a>
                    </div>
                    <div class="col-lg-3 col-md-6"
                         data-responsive="<?= $this->theme->baseUrl ?>/assets/images/media/19.jpg"
                         data-src="<?= $this->theme->baseUrl ?>/assets/images/media/19.jpg" lg-event-uid="&amp;11">
                        <a href="#"><img class="img-fluid mb-0 br-7"
                                         src="<?= $this->theme->baseUrl ?>/assets/images/media/19.jpg "
                                         alt="banner image"></a>
                    </div>
                    <div class="col-lg-3 col-md-6"
                         data-responsive="<?= $this->theme->baseUrl ?>/assets/images/media/20.jpg"
                         data-src="<?= $this->theme->baseUrl ?>/assets/images/media/20.jpg" lg-event-uid="&amp;12">
                        <a href="#"><img class="img-fluid br-7"
                                         src="<?= $this->theme->baseUrl ?>/assets/images/media/20.jpg "
                                         alt="banner image"></a>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="tab-71">
                <div class="row  mb-5">
                    <div class=" col-lg-6 col-md-12">
                        <div class="card border p-0 over-flow-hidden">
                            <div class="media card-body media-xs overflow-visible ">
                                <img class="avatar brround avatar-md me-3"
                                     src="<?= $this->theme->baseUrl ?>/assets/images/users/18.jpg"
                                     alt="avatar-img">
                                <div class="media-body valign-middle">
                                    <a href="" class=" fw-semibold text-dark">John Paige</a>
                                    <p class="text-muted mb-0">johan@gmail.com</p>
                                </div>
                                <div class="media-body valign-middle text-end overflow-visible mt-2">
                                    <button class="btn btn-primary" type="button">Follow</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-6 col-md-12">
                        <div class="card border p-0 over-flow-hidden">
                            <div class="media card-body media-xs overflow-visible ">
                                <span class="avatar cover-image avatar-md brround bg-pink me-3">LQ</span>
                                <div class="media-body valign-middle mt-0">
                                    <a href="" class="fw-semibold text-dark">Lillian Quinn</a>
                                    <p class="text-muted mb-0">lilliangore</p>
                                </div>
                                <div class="media-body valign-middle text-end overflow-visible mt-1">
                                    <button class="btn btn-primary" type="button">Follow</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-6 col-md-12">
                        <div class="card border p-0 over-flow-hidden mb-lg-0">
                            <div class="media card-body media-xs overflow-visible ">
                                <span class="avatar cover-image avatar-md brround me-3 bg-primary">IH</span>
                                <div class="media-body valign-middle mt-0">
                                    <a href="" class="fw-semibold text-dark">Irene Harris</a>
                                    <p class="text-muted mb-0">ireneharris@gmail.com</p>
                                </div>
                                <div class="media-body valign-middle text-end overflow-visible mt-1">
                                    <button class="btn btn-primary" type="button">Follow</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-6 col-md-12">
                        <div class="card border p-0 over-flow-hidden mb-lg-0">
                            <div class="media card-body media-xs overflow-visible ">
                                <img class="avatar brround avatar-md me-3"
                                     src="<?= $this->theme->baseUrl ?>/assets/images/users/2.jpg"
                                     alt="avatar-img">
                                <div class="media-body valign-middle mt-0">
                                    <a href="" class="text-dark fw-semibold">Harry Fisher</a>
                                    <p class="text-muted mb-0">harryuqt</p>
                                </div>
                                <div class="media-body valign-middle text-end overflow-visible mt-1">
                                    <button class="btn btn-primary" type="button">Follow</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-6 col-md-12">
                        <div class="card border p-0 over-flow-hidden">
                            <div class="media card-body media-xs overflow-visible ">
                                <span class="avatar cover-image avatar-md brround bg-pink me-3">AB</span>
                                <div class="media-body valign-middle mt-0">
                                    <a href="" class="fw-semibold text-dark">Aida Bugg</a>
                                    <p class="text-muted mb-0">Aidasr</p>
                                </div>
                                <div class="media-body valign-middle text-end overflow-visible mt-1">
                                    <button class="btn btn-primary" type="button">Follow</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-6 col-md-12">
                        <div class="card border p-0 over-flow-hidden">
                            <div class="media card-body media-xs overflow-visible ">
                                <span class="avatar cover-image avatar-md brround bg-pink me-3">LQ</span>
                                <div class="media-body valign-middle mt-0">
                                    <a href="" class="fw-semibold text-dark">Lillian Quinn</a>
                                    <p class="text-muted mb-0">lilliangore</p>
                                </div>
                                <div class="media-body valign-middle text-end overflow-visible mt-1">
                                    <button class="btn btn-primary" type="button">Follow</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="tab-81">
                <div class="row">
                    <div class=" col-lg-6 col-md-12">
                        <div class="card border p-0 over-flow-hidden">
                            <div class="media card-body media-xs overflow-visible ">
                                <img class="avatar brround avatar-md me-3"
                                     src="<?= $this->theme->baseUrl ?>/assets/images/users/18.jpg"
                                     alt="avatar-img">
                                <div class="media-body valign-middle">
                                    <a href="" class=" fw-semibold text-dark">John Paige</a>
                                    <p class="text-muted mb-0">johan@gmail.com</p>
                                </div>
                                <div class="media-body valign-middle text-end overflow-visible mt-2">
                                    <button class="btn btn-primary" type="button">Follow</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-6 col-md-12">
                        <div class="card border p-0 over-flow-hidden">
                            <div class="media card-body media-xs overflow-visible ">
                                <span class="avatar cover-image avatar-md brround bg-pink me-3">LQ</span>
                                <div class="media-body valign-middle mt-0">
                                    <a href="" class="fw-semibold text-dark">Lillian Quinn</a>
                                    <p class="text-muted mb-0">lilliangore</p>
                                </div>
                                <div class="media-body valign-middle text-end overflow-visible mt-1">
                                    <button class="btn btn-primary" type="button">Follow</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-6 col-md-12">
                        <div class="card border p-0 over-flow-hidden mb-lg-0">
                            <div class="media card-body media-xs overflow-visible ">
                                <span class="avatar cover-image avatar-md brround me-3 bg-primary">IH</span>
                                <div class="media-body valign-middle mt-0">
                                    <a href="" class="fw-semibold text-dark">Irene Harris</a>
                                    <p class="text-muted mb-0">ireneharris@gmail.com</p>
                                </div>
                                <div class="media-body valign-middle text-end overflow-visible mt-1">
                                    <button class="btn btn-primary" type="button">Follow</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-6 col-md-12">
                        <div class="card border p-0 over-flow-hidden">
                            <div class="media card-body media-xs overflow-visible ">
                                <img class="avatar brround avatar-md me-3"
                                     src="<?= $this->theme->baseUrl ?>/assets/images/users/3.jpg"
                                     alt="avatar-img">
                                <div class="media-body valign-middle mt-0">
                                    <a href="" class="text-dark fw-semibold">Saureen Bgist</a>
                                    <p class="text-muted mb-0">harryuqt</p>
                                </div>
                                <div class="media-body valign-middle text-end overflow-visible mt-1">
                                    <button class="btn btn-primary" type="button">Follow</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-6 col-md-12">
                        <div class="card border p-0 over-flow-hidden">
                            <div class="media card-body media-xs overflow-visible ">
                                <img class="avatar brround avatar-md me-3"
                                     src="<?= $this->theme->baseUrl ?>/assets/images/users/2.jpg"
                                     alt="avatar-img">
                                <div class="media-body valign-middle mt-0">
                                    <a href="" class="text-dark fw-semibold">Maureen Biologist</a>
                                    <p class="text-muted mb-0">harryuqt</p>
                                </div>
                                <div class="media-body valign-middle text-end overflow-visible mt-1">
                                    <button class="btn btn-primary" type="button">Follow</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-6 col-md-12">
                        <div class="card border p-0 over-flow-hidden">
                            <div class="media card-body media-xs overflow-visible ">
                                <span class="avatar cover-image avatar-md brround me-3 bg-info">PF</span>
                                <div class="media-body valign-middle mt-0">
                                    <a href="" class="fw-semibold text-dark">Paddy O'Furniture.</a>
                                    <p class="text-muted mb-0">ireneharris@gmail.com</p>
                                </div>
                                <div class="media-body valign-middle text-end overflow-visible mt-1">
                                    <button class="btn btn-primary" type="button">Follow</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- COL-END -->
</div>
