<?php

namespace App\Http\Controllers\Sales;

use App\Enums\Directorship;
use App\Enums\Role as EnumsRole;
use App\Http\Controllers\Controller;
use App\Http\Resources\Orders\OrdersCollection;
use App\Http\Responses\Sales\IndexResponse;
use App\Models\Order;
use App\Models\Unity;
use App\Models\User;
use App\Models\User\Role;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;

class IndexSalesController extends Controller
{
    private User $user;

    private Unity $unity;

    private Builder $ordersQuery;

    public function __invoke(Request $request)
    {
        $this->setUser($request->currentUser());

        $this->setUnity($this->user->unity);

        $this->setOrdersQueryForRole(EnumsRole::from($this->user->role));

        $orders = $this->ordersQuery->paginate(config('app.pagination.per_page'));

        return new IndexResponse(new OrdersCollection($orders));
    }

    private function setUser(User $user): void
    {
        $this->user = $user;
    }

    private function setUnity(Unity $unity): void
    {
        $this->unity = $unity;
    }

    private function setOrdersQueryForRole(EnumsRole $role): void
    {
        switch($role) {
            case Role::SELLER_ROLE:
                $this->setSellerQuery();

                break;

            case Role::MANAGER_ROLE:
                $this->setManagerQuery();

                break;

            case Role::SUB_DIRECTOR_ROLE:
                $this->setSubDirectorQuery();

                break;

            case Role::MAIN_DIRECTOR_ROLE:
                $this->setMainDirectorSalesQuery();

                break;

            default:
                throw new \InvalidArgumentException('Unknown role ' . $role);

                break;
        }
    }

    private function setSellerQuery(): void
    {
        $this->ordersQuery = Order::query()->whereSeller($this->user);
    }

    private function setManagerQuery(): void
    {
        $this->ordersQuery = Order::query()->whereUnity($this->unity);
    }

    private function setSubDirectorQuery(): void
    {
        $this->ordersQuery = Order::query()->whereDirectorship(
            Directorship::from($this->unity->directorship)
        );
    }

    private function setMainDirectorSalesQuery(): void
    {
        $this->ordersQuery = Order::query();
    }
}
