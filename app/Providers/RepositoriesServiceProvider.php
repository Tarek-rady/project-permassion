<?php

namespace App\Providers;

        use App\Repositories\Sql\CategoryRepository;
        use App\Repositories\Contract\CategoryRepositoryInterface;

        use App\Repositories\Sql\RoleRepository;
        use App\Repositories\Contract\RoleRepositoryInterface;

        use App\Repositories\Sql\FeautureRepository;
        use App\Repositories\Contract\FeautureRepositoryInterface;

        use App\Repositories\Sql\NotificationRepository;
        use App\Repositories\Contract\NotificationRepositoryInterface;

        use App\Repositories\Sql\OrderRepository;
        use App\Repositories\Contract\OrderRepositoryInterface;

        use App\Repositories\Sql\SettingRepository;
        use App\Repositories\Contract\SettingRepositoryInterface;

        use App\Repositories\Sql\ContactUsRepository;
        use App\Repositories\Contract\ContactUsRepositoryInterface;

        use App\Repositories\Sql\StaticPageRepository;
        use App\Repositories\Contract\StaticPageRepositoryInterface;

        use App\Repositories\Sql\CareerApllyRepository;
        use App\Repositories\Contract\CareerApllyRepositoryInterface;

        use App\Repositories\Sql\SubCategoryRepository;
        use App\Repositories\Contract\SubCategoryRepositoryInterface;

        use App\Repositories\Sql\CareerRepository;
        use App\Repositories\Contract\CareerRepositoryInterface;

        use App\Repositories\Sql\BrandRepository;
        use App\Repositories\Contract\BrandRepositoryInterface;

        use App\Repositories\Sql\NewsRepository;
        use App\Repositories\Contract\NewsRepositoryInterface;

        use App\Repositories\Sql\ClintRepository;
        use App\Repositories\Contract\ClintRepositoryInterface;

        use App\Repositories\Sql\ContactCompanyRepository;
        use App\Repositories\Contract\ContactCompanyRepositoryInterface;

        use App\Repositories\Sql\CouponRepository;
        use App\Repositories\Contract\CouponRepositoryInterface;



    use App\Repositories\Sql\CustomerRepository;
    use App\Repositories\Contract\CustomerRepositoryInterface;






use App\Repositories\Sql\UserRepository;
use App\Repositories\Contract\UserRepositoryInterface;



use App\Repositories\Contract\BaseRepositoryInterface;
// repository

use App\Repositories\Sql\BaseRepository;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{

    public function register(){

        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);

        $this->app->bind(RoleRepositoryInterface::class, RoleRepository::class);

        $this->app->bind(FeautureRepositoryInterface::class, FeautureRepository::class);

        $this->app->bind(NotificationRepositoryInterface::class, NotificationRepository::class);

        $this->app->bind(OrderRepositoryInterface::class, OrderRepository::class);

        $this->app->bind(SettingRepositoryInterface::class, SettingRepository::class);

        $this->app->bind(ContactUsRepositoryInterface::class, ContactUsRepository::class);

        $this->app->bind(StaticPageRepositoryInterface::class, StaticPageRepository::class);

        $this->app->bind(CareerApllyRepositoryInterface::class, CareerApllyRepository::class);

        $this->app->bind(SubCategoryRepositoryInterface::class, SubCategoryRepository::class);

        $this->app->bind(CareerRepositoryInterface::class, CareerRepository::class);

        $this->app->bind(BrandRepositoryInterface::class, BrandRepository::class);

        $this->app->bind(NewsRepositoryInterface::class, NewsRepository::class);

        $this->app->bind(ClintRepositoryInterface::class, ClintRepository::class);

        $this->app->bind(ContactCompanyRepositoryInterface::class, ContactCompanyRepository::class);

        $this->app->bind(CouponRepositoryInterface::class, CouponRepository::class);



        $this->app->bind(CustomerRepositoryInterface::class, CustomerRepository::class);






        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);

        $this->app->bind(BaseRepositoryInterface::class, BaseRepository::class);
    }

    public function boot()
    {
        //
    }
}
