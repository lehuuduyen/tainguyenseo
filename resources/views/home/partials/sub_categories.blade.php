    @foreach ($categories as $category)
    <li itemprop="itemListElement" itemscope="" class="Breadcrumbs-item tag" style="cursor: pointer;">
        <span itemprop="name" category-id="{{ $category->id }}">{{ $category->name }}</span>
    </li>
    @endforeach