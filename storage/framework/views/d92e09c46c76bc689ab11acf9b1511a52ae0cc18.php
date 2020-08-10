<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('dashboard')): ?>
    <li class="nav-item">
        <a class="nav-link <?php echo e(Request::is('dashboard*') ? 'active' : ''); ?>" href="<?php echo url('dashboard'); ?>"><?php if($icons): ?>
                <i class="nav-icon fa fa-dashboard"></i><?php endif; ?>
            <p><?php echo e(trans('lang.dashboard')); ?></p></a>
    </li>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('favorites.index')): ?>
    <li class="nav-item">
        <a class="nav-link <?php echo e(Request::is('favorites*') ? 'active' : ''); ?>" href="<?php echo route('favorites.index'); ?>"><?php if($icons): ?>
                <i class="nav-icon fa fa-heart"></i><?php endif; ?><p><?php echo e(trans('lang.favorite_plural')); ?></p></a>
    </li>
<?php endif; ?>

<li class="nav-header"><?php echo e(trans('lang.app_management')); ?></li>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('restaurants.index')): ?>
    <li class="nav-item has-treeview <?php echo e((Request::is('restaurants*') || Request::is('galleries*') || Request::is('restaurantReviews*')) && !Request::is('restaurantsPayouts*') ? 'menu-open' : ''); ?>">
        <a href="#" class="nav-link <?php echo e((Request::is('restaurants*') || Request::is('galleries*') || Request::is('restaurantReviews*')) && !Request::is('restaurantsPayouts*')? 'active' : ''); ?>"> <?php if($icons): ?>
                <i class="nav-icon fa fa-cutlery"></i><?php endif; ?>
            <p><?php echo e(trans('lang.restaurant_plural')); ?> <i class="right fa fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('restaurants.index')): ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('restaurants*') ? 'active' : ''); ?>" href="<?php echo route('restaurants.index'); ?>"><?php if($icons): ?>
                            <i class="nav-icon fa fa-cutlery"></i><?php endif; ?><p><?php echo e(trans('lang.restaurant_plural')); ?></p></a>
                </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('galleries.index')): ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('galleries*') ? 'active' : ''); ?>" href="<?php echo route('galleries.index'); ?>"><?php if($icons): ?>
                            <i class="nav-icon fa fa-image"></i><?php endif; ?><p><?php echo e(trans('lang.gallery_plural')); ?></p></a>
                </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('restaurantReviews.index')): ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('restaurantReviews*') ? 'active' : ''); ?>" href="<?php echo route('restaurantReviews.index'); ?>"><?php if($icons): ?>
                            <i class="nav-icon fa fa-comments"></i><?php endif; ?><p><?php echo e(trans('lang.restaurant_review_plural')); ?></p></a>
                </li>
            <?php endif; ?>
        </ul>
    </li>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('foods.index')): ?>
    <li class="nav-item has-treeview <?php echo e(Request::is('categories*') || Request::is('foods*') || Request::is('extras*') || Request::is('foodReviews*') || Request::is('nutrition*') ? 'menu-open' : ''); ?>">
        <a href="#" class="nav-link <?php echo e(Request::is('categories*') || Request::is('foods*') || Request::is('extras*') || Request::is('foodReviews*') || Request::is('nutrition*') ? 'active' : ''); ?>"> <?php if($icons): ?>
                <i class="nav-icon fa fa-fire"></i><?php endif; ?>
            <p><?php echo e(trans('lang.food_plural')); ?> <i class="right fa fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('categories.index')): ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('categories*') ? 'active' : ''); ?>" href="<?php echo route('categories.index'); ?>"><?php if($icons): ?>
                            <i class="nav-icon fa fa-folder"></i><?php endif; ?><p><?php echo e(trans('lang.category_plural')); ?></p></a>
                </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('foods.index')): ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('foods*') ? 'active' : ''); ?>" href="<?php echo route('foods.index'); ?>"><?php if($icons): ?>
                            <i class="nav-icon fa fa-fire"></i><?php endif; ?>
                        <p><?php echo e(trans('lang.food_plural')); ?></p></a>
                </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('extras.index')): ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('extras*') ? 'active' : ''); ?>" href="<?php echo route('extras.index'); ?>"><?php if($icons): ?>
                            <i class="nav-icon fa fa-plus-circle"></i><?php endif; ?><p><?php echo e(trans('lang.extra_plural')); ?></p></a>
                </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('foodReviews.index')): ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('foodReviews*') ? 'active' : ''); ?>" href="<?php echo route('foodReviews.index'); ?>"><?php if($icons): ?>
                            <i class="nav-icon fa fa-comments"></i><?php endif; ?><p><?php echo e(trans('lang.food_review_plural')); ?></p></a>
                </li>
            <?php endif; ?>


            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('nutrition.index')): ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('nutrition*') ? 'active' : ''); ?>" href="<?php echo route('nutrition.index'); ?>"><?php if($icons): ?>
                            <i class="nav-icon fa fa-tasks"></i><?php endif; ?><p><?php echo e(trans('lang.nutrition_plural')); ?></p></a>
                </li>
            <?php endif; ?>

        </ul>
    </li>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('orders.index')): ?>
    <li class="nav-item has-treeview <?php echo e(Request::is('orders*') || Request::is('orderStatuses*') || Request::is('deliveryAddresses*')? 'menu-open' : ''); ?>">
        <a href="#" class="nav-link <?php echo e(Request::is('orders*') || Request::is('orderStatuses*') || Request::is('deliveryAddresses*')? 'active' : ''); ?>"> <?php if($icons): ?>
                <i class="nav-icon fa fa-archive"></i><?php endif; ?>
            <p><?php echo e(trans('lang.order_plural')); ?> <i class="right fa fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('orders.index')): ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('orders*') ? 'active' : ''); ?>" href="<?php echo route('orders.index'); ?>"><?php if($icons): ?>
                            <i class="nav-icon fa fa-archive"></i><?php endif; ?><p><?php echo e(trans('lang.order_plural')); ?></p></a>
                </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('orderStatuses.index')): ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('orderStatuses*') ? 'active' : ''); ?>" href="<?php echo route('orderStatuses.index'); ?>"><?php if($icons): ?>
                            <i class="nav-icon fa fa-server"></i><?php endif; ?><p><?php echo e(trans('lang.order_status_plural')); ?></p></a>
                </li>
            <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('deliveryAddresses.index')): ?>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(Request::is('deliveryAddresses*') ? 'active' : ''); ?>" href="<?php echo route('deliveryAddresses.index'); ?>"><?php if($icons): ?><i class="nav-icon fa fa-map"></i><?php endif; ?><p><?php echo e(trans('lang.delivery_address_plural')); ?></p></a>
                    </li>
                <?php endif; ?>

        </ul>
    </li>
<?php endif; ?>


<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('faqs.index')): ?>
    <li class="nav-item has-treeview <?php echo e(Request::is('faqCategories*') || Request::is('faqs*') ? 'menu-open' : ''); ?>">
        <a href="#" class="nav-link <?php echo e(Request::is('faqs*') || Request::is('faqCategories*') ? 'active' : ''); ?>"> <?php if($icons): ?>
                <i class="nav-icon fa fa-support"></i><?php endif; ?>
            <p><?php echo e(trans('lang.faq_plural')); ?> <i class="right fa fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('faqCategories.index')): ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('faqCategories*') ? 'active' : ''); ?>" href="<?php echo route('faqCategories.index'); ?>"><?php if($icons): ?>
                            <i class="nav-icon fa fa-folder"></i><?php endif; ?><p><?php echo e(trans('lang.faq_category_plural')); ?></p></a>
                </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('faqs.index')): ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('faqs*') ? 'active' : ''); ?>" href="<?php echo route('faqs.index'); ?>"><?php if($icons): ?>
                            <i class="nav-icon fa fa-question-circle"></i><?php endif; ?>
                        <p><?php echo e(trans('lang.faq_plural')); ?></p></a>
                </li>
            <?php endif; ?>
        </ul>
    </li>
<?php endif; ?>

<li class="nav-header"><?php echo e(trans('lang.app_setting')); ?></li>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('medias')): ?>
    <li class="nav-item">
        <a class="nav-link <?php echo e(Request::is('medias*') ? 'active' : ''); ?>" href="<?php echo url('medias'); ?>"><?php if($icons): ?><i class="nav-icon fa fa-picture-o"></i><?php endif; ?>
            <p><?php echo e(trans('lang.media_plural')); ?></p></a>
    </li>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('payments.index')): ?>
    <li class="nav-item has-treeview <?php echo e(Request::is('drivers*') || Request::is('earnings*') || Request::is('driversPayouts*') || Request::is('restaurantsPayouts*') || Request::is('payments*') ? 'menu-open' : ''); ?>">
        <a href="#" class="nav-link <?php echo e(Request::is('drivers*') || Request::is('earnings*') || Request::is('driversPayouts*') || Request::is('restaurantsPayouts*') || Request::is('payments*') ? 'active' : ''); ?>"> <?php if($icons): ?>
                <i class="nav-icon fa fa-credit-card"></i><?php endif; ?>
            <p><?php echo e(trans('lang.payment_plural')); ?><i class="right fa fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('payments.index')): ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('payments*') ? 'active' : ''); ?>" href="<?php echo route('payments.index'); ?>"><?php if($icons): ?>
                            <i class="nav-icon fa fa-money"></i><?php endif; ?><p><?php echo e(trans('lang.payment_plural')); ?></p></a>
                </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('drivers.index')): ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('drivers*') ? 'active' : ''); ?>" href="<?php echo route('drivers.index'); ?>"><?php if($icons): ?><i class="nav-icon fa fa-car"></i><?php endif; ?><p><?php echo e(trans('lang.driver_plural')); ?> <span class="right badge badge-danger">New</span> </p></a>
                </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('earnings.index')): ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('earnings*') ? 'active' : ''); ?>" href="<?php echo route('earnings.index'); ?>"><?php if($icons): ?><i class="nav-icon fa fa-money"></i><?php endif; ?><p><?php echo e(trans('lang.earning_plural')); ?> <span class="right badge badge-danger">New</span> </p></a>
                </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('driversPayouts.index')): ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('driversPayouts*') ? 'active' : ''); ?>" href="<?php echo route('driversPayouts.index'); ?>"><?php if($icons): ?><i class="nav-icon fa fa-dollar"></i><?php endif; ?><p><?php echo e(trans('lang.drivers_payout_plural')); ?></p></a>
                </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('restaurantsPayouts.index')): ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('restaurantsPayouts*') ? 'active' : ''); ?>" href="<?php echo route('restaurantsPayouts.index'); ?>"><?php if($icons): ?><i class="nav-icon fa fa-dollar"></i><?php endif; ?><p><?php echo e(trans('lang.restaurants_payout_plural')); ?></p></a>
                </li>
            <?php endif; ?>

        </ul>
    </li>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('app-settings')): ?>
    <li class="nav-item has-treeview <?php echo e(Request::is('settings/mobile*') ? 'menu-open' : ''); ?>">
        <a href="#" class="nav-link <?php echo e(Request::is('settings/mobile*') ? 'active' : ''); ?>">
            <?php if($icons): ?><i class="nav-icon fa fa-mobile"></i><?php endif; ?>
            <p>
                <?php echo e(trans('lang.mobile_menu')); ?>

                <i class="right fa fa-angle-left"></i>
            </p></a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="<?php echo url('settings/mobile/globals'); ?>" class="nav-link <?php echo e(Request::is('settings/mobile/globals*') ? 'active' : ''); ?>">
                    <?php if($icons): ?><i class="nav-icon fa fa-cog"></i> <?php endif; ?> <p><?php echo e(trans('lang.app_setting_globals')); ?> <span class="right badge badge-danger">New</span> </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?php echo url('settings/mobile/colors'); ?>" class="nav-link <?php echo e(Request::is('settings/mobile/colors*') ? 'active' : ''); ?>">
                    <?php if($icons): ?><i class="nav-icon fa fa-pencil"></i> <?php endif; ?> <p><?php echo e(trans('lang.mobile_colors')); ?> <span class="right badge badge-danger">New</span> </p>
                </a>
            </li>
        </ul>

    </li>
    <li class="nav-item has-treeview <?php echo e((Request::is('settings*') ||
     Request::is('menu*') ||
      Request::is('notificationTypes*') ||
       Request::is('currencies*')) && !Request::is('settings/mobile*')
        ? 'menu-open' : ''); ?>">
        <a href="#" class="nav-link <?php echo e((Request::is('settings*') ||
         Request::is('currencies*') ||
          Request::is('notificationTypes*')) && !Request::is('settings/mobile*')
          ? 'active' : ''); ?>"> <?php if($icons): ?><i class="nav-icon fa fa-cogs"></i><?php endif; ?>
            <p><?php echo e(trans('lang.app_setting')); ?> <i class="right fa fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="<?php echo url('settings/app/globals'); ?>" class="nav-link <?php echo e(Request::is('settings/app/globals*') ? 'active' : ''); ?>">
                    <?php if($icons): ?><i class="nav-icon fa fa-cog"></i> <?php endif; ?> <p><?php echo e(trans('lang.app_setting_globals')); ?></p>
                </a>
            </li>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('users.index')): ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('settings/users*') ? 'active' : ''); ?>" href="<?php echo route('users.index'); ?>"><?php if($icons): ?>
                            <i class="nav-icon fa fa-users"></i><?php endif; ?>
                        <p><?php echo e(trans('lang.user_plural')); ?></p></a>
                </li>
            <?php endif; ?>

            <li class="nav-item has-treeview <?php echo e(Request::is('settings/permissions*') || Request::is('settings/roles*') ? 'menu-open' : ''); ?>">
                <a href="#" class="nav-link <?php echo e(Request::is('settings/permissions*') || Request::is('settings/roles*') ? 'active' : ''); ?>">
                    <?php if($icons): ?><i class="nav-icon fa fa-user-secret"></i><?php endif; ?>
                    <p>
                        <?php echo e(trans('lang.permission_menu')); ?>

                        <i class="right fa fa-angle-left"></i>
                    </p></a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(Request::is('settings/permissions') ? 'active' : ''); ?>" href="<?php echo route('permissions.index'); ?>">
                            <?php if($icons): ?><i class="nav-icon fa fa-circle-o"></i><?php endif; ?>
                            <p><?php echo e(trans('lang.permission_table')); ?></p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(Request::is('settings/permissions/create') ? 'active' : ''); ?>" href="<?php echo route('permissions.create'); ?>">
                            <?php if($icons): ?><i class="nav-icon fa fa-circle-o"></i><?php endif; ?>
                            <p><?php echo e(trans('lang.permission_create')); ?></p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(Request::is('settings/roles') ? 'active' : ''); ?>" href="<?php echo route('roles.index'); ?>">
                            <?php if($icons): ?><i class="nav-icon fa fa-circle-o"></i><?php endif; ?>
                            <p><?php echo e(trans('lang.role_table')); ?></p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(Request::is('settings/roles/create') ? 'active' : ''); ?>" href="<?php echo route('roles.create'); ?>">
                            <?php if($icons): ?><i class="nav-icon fa fa-circle-o"></i><?php endif; ?>
                            <p><?php echo e(trans('lang.role_create')); ?></p>
                        </a>
                    </li>
                </ul>

            </li>

            <li class="nav-item">
                <a class="nav-link <?php echo e(Request::is('settings/customFields*') ? 'active' : ''); ?>" href="<?php echo route('customFields.index'); ?>"><?php if($icons): ?>
                        <i class="nav-icon fa fa-list"></i><?php endif; ?><p><?php echo e(trans('lang.custom_field_plural')); ?></p></a>
            </li>


            <li class="nav-item">
                <a href="<?php echo url('settings/app/localisation'); ?>" class="nav-link <?php echo e(Request::is('settings/app/localisation*') ? 'active' : ''); ?>">
                    <?php if($icons): ?><i class="nav-icon fa fa-language"></i> <?php endif; ?> <p><?php echo e(trans('lang.app_setting_localisation')); ?></p></a>
            </li>
            <li class="nav-item">
                <a href="<?php echo url('settings/translation/en'); ?>" class="nav-link <?php echo e(Request::is('settings/translation*') ? 'active' : ''); ?>">
                    <?php if($icons): ?> <i class="nav-icon fa fa-language"></i> <?php endif; ?> <p><?php echo e(trans('lang.app_setting_translation')); ?></p></a>
            </li>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('currencies.index')): ?>
            <li class="nav-item">
              <a class="nav-link <?php echo e(Request::is('currencies*') ? 'active' : ''); ?>" href="<?php echo route('currencies.index'); ?>"><?php if($icons): ?><i class="nav-icon fa fa-dollar"></i><?php endif; ?><p><?php echo e(trans('lang.currency_plural')); ?></p></a>
            </li>
            <?php endif; ?>

            <li class="nav-item">
                <a href="<?php echo url('settings/app/payment'); ?>" class="nav-link <?php echo e(Request::is('settings/app/payment*') ? 'active' : ''); ?>">
                    <?php if($icons): ?><i class="nav-icon fa fa-credit-card"></i> <?php endif; ?> <p><?php echo e(trans('lang.app_setting_payment')); ?></p>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?php echo url('settings/app/social'); ?>" class="nav-link <?php echo e(Request::is('settings/app/social*') ? 'active' : ''); ?>">
                    <?php if($icons): ?><i class="nav-icon fa fa-globe"></i> <?php endif; ?> <p><?php echo e(trans('lang.app_setting_social')); ?></p>
                </a>
            </li>


            <li class="nav-item">
                <a href="<?php echo url('settings/app/notifications'); ?>" class="nav-link <?php echo e(Request::is('settings/app/notifications*') ? 'active' : ''); ?>">
                    <?php if($icons): ?><i class="nav-icon fa fa-bell"></i> <?php endif; ?> <p><?php echo e(trans('lang.app_setting_notifications')); ?></p>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?php echo url('settings/mail/smtp'); ?>" class="nav-link <?php echo e(Request::is('settings/mail*') ? 'active' : ''); ?>">
                    <?php if($icons): ?><i class="nav-icon fa fa-envelope"></i> <?php endif; ?> <p><?php echo e(trans('lang.app_setting_mail')); ?></p>
                </a>
            </li>

        </ul>
    </li>
<?php endif; ?>





<?php /**PATH C:\xampp\htdocs\multi-restaurants\resources\views/layouts/menu.blade.php ENDPATH**/ ?>