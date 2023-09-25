@extends('layouts.layoutnews')
@section('content')
<section class="block pt-2">
    <div class="container">
      <div class="row justify-content-center">
        {{-- <div class="col-12">
          <span class="mr-2">
            <a href="../index.html#news-section" style="text-decoration: none"
              >News</a
            >
          </span>
          <span class="mr-2" style="font-size: 12px">
            <i class="fa fa-chevron-right"></i>
          </span>
          <span
            ><a href="#" style="text-decoration: none"
              >PLN Icon Plus Ukir Prestasi di Panggung TJSL & CSR Award
              2023</a
            >
          </span>
        </div> --}}
      </div>
    </div>
  </section>
  <section class="single-header">
    <div class="">
      <img
        class="container"
        {{-- src="../assets/images/news/News_4.jpg" --}}
        style="display: block; margin-left: auto; margin-right: auto"
        width="100%"
        alt=""
      />
    </div>
  </section>

  <section class="content-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="blog-post california">
                    <div class="row">
                        <div class="col">
                            <div class="post-content detail-content">
                                @if(isset($newsImage))
                                <center>
                                    <h1 class="post-title">
                                        {{ $newsImage->title }}
                                    </h1>
                                    <div class="row justify-content-center mb-2 mt-4">
                                        <div class="col-auto px-3">
                                            <small class="text-muted">
                                                {{ \Carbon\Carbon::parse($newsImage->date)->format('j F Y') }} &nbsp;&nbsp; | &nbsp;&nbsp; {{ $newsImage->created_at->format('H:i') }} WIB
                                            </small>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-auto mx-auto">
                                            <div class="author-info-box">
                                                <div class="content px-2">
                                                    <div
                                                        class="d-flex flex-column h-100 justify-content-center"
                                                    >
                                                        <small class="d-block" style="max-width: 500px">
                                                            PLN Icon+
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="mt-20 mb-40" />
                                    <div class="has-dropcap" style="overflow-wrap: break-word; word-wrap: break-word; word-break: break-word;">
                                        @if(isset($newsImage->picture))
                                            <img src="{{ asset('uploads/' . $newsImage->picture) }}" alt="" class="mb-2" style="width:100%"/>
                                        @endif
                                        @php
                                        $content = $newsImage->contentnews;
                                        $paragraphs = explode("\n", $content);
                                        @endphp

                                        @foreach ($paragraphs as $paragraph)
                                            <p style="text-align: left;">{{ $paragraph }}</p>
                                        @endforeach
                                    </div>
                                    <h5>Share to : </h5>
                                    <div id="shareRoundIcons"></div>
                                    </center>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
