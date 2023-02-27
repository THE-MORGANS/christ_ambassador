<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class Controller extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  protected $blog;
  
  public function __construct(Blog $blo)
  {
    $this->blog = $blo;
  }

  public function paginate($items, $perPage = 4, $page = null)
  {
    $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
    $total = count($items);
    $currentpage = $page;
    $offset = ($currentpage * $perPage) - $perPage;
    $itemstoshow = array_slice($items, $offset, $perPage);
    return new LengthAwarePaginator($itemstoshow, $total, $perPage);
  }
}
