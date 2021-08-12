<section class="h-screen bg-gray-100 py-24">
    <div class="container mx-auto px-2 pt-4 pb-12 text-gray-800">
        <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
            Frequently Asked Question
        </h1>
        <div class="w-full mb-4">
            <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
            <div class="w-full px-4 py-8">
                @foreach($faqs as $faq)
                <details class="mb-4">
                    <summary class="text-xl font-semibold bg-gray-200 rounded-md py-2 px-4">
	                    {{$faq->pertanyaan}}
                    </summary>
                    <span class="text-lg">
                  {{$faq->jawaban}}
                </span>
                </details>
                @endforeach
            </div>
        </div>
    </div>
</section>
