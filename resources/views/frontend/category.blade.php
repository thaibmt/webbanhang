@extends('layouts.master')

@section('main-content')
    <!-- product section -->
    <section class="product_section layout_padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-3">
                    <ul>
                        @foreach ($categoryList as $category)
                            <li><a href="{{ route('frontend.category', $category->href_param) }}">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-9 row">
                    @foreach ($productList as $item)
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="box">
                                <div class="option_container">
                                    <div class="options">
                                        <a href="{{ route('frontend.detail', ['id' => $item->id, 'href_param' => $item->slug]) }}"
                                            class="option1">
                                            {{ $item->title }}
                                        </a>
                                        <a href="{{ route('frontend.detail', ['id' => $item->id, 'href_param' => $item->slug]) }}"
                                            class="option2">
                                            Buy Now
                                        </a>
                                    </div>
                                </div>
                                <div class="img-box">
                                    <img src="{{ $item->thumbnail }}" alt="{{ $item->title }}">
                                </div>
                                <div class="detail-box">
                                    <h6>
                                        {{ $item->title }}
                                    </h6>
                                    <br /><br />
                                    <h6>
                                        {{ number_format($item->discount, 0) }} vnd
                                    </h6>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="btn-box">
                {{ $productList->links() }}
            </div>
        </div>
    </section>
    <!-- end product section -->
@stop
