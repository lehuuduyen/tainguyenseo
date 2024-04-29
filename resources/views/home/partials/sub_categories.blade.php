    <input type="hidden" name="selected_category" value="{{$selectedCategory}}">
    <nav class="Breadcrumbs">
        <ul itemscope="" itemtype="https://schema.org/BreadcrumbList" class="Breadcrumbs-list">

            <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem" class="Breadcrumbs-item">
                <a itemprop="item" href="/" class="Breadcrumbs-link">
                    <span itemprop="name">Tài nguyên</span>
                </a>
                <meta itemprop="position" content="1">
            </li>
            @if(!empty($parentCategories))
            @foreach ($parentCategories as $index => $category)
            @if (!$loop->last)
            <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem" class="Breadcrumbs-item">
                @if(request()->has('category'))
                <a href="{{ url('/') }}&category={{$category->id}}"><span itemprop="name">{{ $category->name }}</span></a>
                @else
                <a href="{{ url('/') }}?category={{$category->id}}"><span itemprop="name">{{ $category->name }}</span></a>
                @endif
            </li>
            @endif
            @if ($loop->last)
            <select name="categories_select">
                @if(!empty($categoriesList))
                @foreach ($categoriesList as $cat)
                <option value="{{ $cat->id }}" {{ $cat->id == $selectedCategory ? 'selected' : '' }}>{{ $cat->name }}</option>
                @endforeach
                @else
                @foreach ($parentCategories as $cat)
                <option value="{{ $cat->id }}" {{ $loop->last ? 'selected' : '' }}>{{ $cat->name }}</option>
                @endforeach
                @endif
            </select>
            @endif
            @endforeach
            @endif

        </ul>
    </nav>
    <div class="SubCategory-breadCrumb">
        <nav class="Breadcrumbs">
            <ul itemscope="" itemtype="https://schema.org/BreadcrumbList" class="Breadcrumbs-Categories-list">
                @foreach($childCategories as $child)
                <li itemprop="itemListElement" itemscope="" class="Breadcrumbs-item tag">
                    <span itemprop="name" category-id="{{ $child->id }}">{{ $child->name }}</span>
                </li>
                @endforeach
            </ul>
        </nav>

    </div>