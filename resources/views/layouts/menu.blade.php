<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('posts.index') }}" class="nav-link {{ Request::is('posts*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Posts</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('products.index') }}" class="nav-link {{ Request::is('products*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Products</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('orders.index') }}" class="nav-link {{ Request::is('orders*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Orders</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('invoices.index') }}" class="nav-link {{ Request::is('invoices*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Invoices</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('inventory-transactions.index') }}" class="nav-link {{ Request::is('inventoryTransactions*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Inventory Transactions</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('order-details.index') }}" class="nav-link {{ Request::is('orderDetails*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Order Details</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('purchase-orders.index') }}" class="nav-link {{ Request::is('purchaseOrders*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Purchase Orders</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('purchase-order-details.index') }}" class="nav-link {{ Request::is('purchaseOrderDetails*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Purchase Order Details</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('shippers.index') }}" class="nav-link {{ Request::is('shippers*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Shippers</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('suppliers.index') }}" class="nav-link {{ Request::is('suppliers*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Suppliers</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('users.index') }}" class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Users</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('employees.index') }}" class="nav-link {{ Request::is('employees*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Employees</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('customers.index') }}" class="nav-link {{ Request::is('customers*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Customers</p>
    </a>
</li>
