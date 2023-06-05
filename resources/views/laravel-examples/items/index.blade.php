<x-page-template bodyClass='g-sidenav-show  bg-gray-200'>
    <x-auth.navbars.sidebar activePage="laravel-examples" activeItem="item-management" activeSubitem=""></x-auth.navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
      <!-- Navbar -->
      <x-auth.navbars.navs.auth pageTitle="Item Management"></x-auth.navbars.navs.auth>
      <!-- End Navbar -->
      <div class="container-fluid py-4">
        <div class="row mt-4">
          <div class="col-12">
            <div class="card">
              <!-- Card header -->
              <div class="card-header">
                <h5 class="mb-0">Items</h5>
              </div>
              @if (Session::has('status'))
              <div class="alert alert-success alert-dismissible text-white mx-4" role="alert">
                <span class="text-sm">{{ Session::get('status') }}</span>
                <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
              @endif
              @can('create', App\Models\Item::class)
              <div class="col-12 text-end">
                <a class="btn bg-gradient-dark mb-0 me-4" href="{{ route('add.item') }}"><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Add Item</a>
              </div>
              @endcan
              <div class="table-responsive">
                <table class="table table-flush" id="datatable-basic">
                  <thead class="thead-light">
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Picture</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Category</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tags</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Creation date</th>
                      @can('manage-items', App\Models\User::class )
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
                      @endcan
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($items as $item )
                    <tr>
                      <td class="text-sm font-weight-normal">{{ $item->id }}</td>
                      <td class="text-sm font-weight-normal">{{ $item->name }}</td>
                      <td><img src="/storage/{{($item->picture)}}" alt="picture"  class="avatar avatar-xxl me-2 rounded-3" style="object-fit: cover"></td>
                      <td class="text-sm font-weight-normal">{{ $item->category->name }}</td>
                      <td>
                      @foreach ($item->tag as $tag)
                      <span class="badge badge-default" style="background-color:{{ $tag->color }}">{{ $tag->name }}</span>
                      @endforeach
                      </td>
                      <td class="text-sm font-weight-normal">{{ $item->created_at->format('Y-m-d') }}</td>
                      @can('manage-items', App\Models\User::class)
                      <td><form method="POST" action="{{ route('delete.item', $item) }}">
                        @csrf
                        @can('update', $item)
                              <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('edit.item', $item) }}" data-original-title="" title="">
                                <i class="material-icons">edit</i>
                                <div class="ripple-container"></div>
                              </a>
                              @endcan
                              @can('delete', $item)
                              <button type="button" class="btn btn-danger btn-link" data-original-title="" title="" onclick="confirm('Are you sure you want to delete this item?') ? this.parentElement.submit() : ''">
                                <i class="material-icons">close</i>
                                <div class="ripple-container"></div>
                            </button>
                            @endcan
                          </form></td>
                          @endcan
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <x-auth.footers.auth.footer></x-auth.footers.auth.footer>
      </div>
    </main>
    <x-plugins></x-plugins>
  @push('js')
  <script src="{{ asset('assets') }}/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/datatables.js"></script>
    <script>
      const dataTableBasic = new simpleDatatables.DataTable("#datatable-basic", {
        searchable: true,
        fixedHeight: true
      });
    </script>
    @endpush
  </x-page-template>
