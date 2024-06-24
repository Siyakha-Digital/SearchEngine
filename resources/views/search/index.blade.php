@extends('layouts.app2')
@section('content')

<?php

// Example search results: For results pulled from the system (These will come from Laravel Scout)
$smmeSearchResults = [
  [
    "id" => 1,
    "name" => "MIMO",
    "slogan" => "The only spices you know",
    "category" => ["Food & Beverages"],
    "description" => "Siyabonga's Business is a proudly South African wholesale and retail spice company offering a variety of unique and flavorful spices.",
    "location" => "Gauteng, Johannesburg",
    "contact_info" => "+27 11 (256) 9811"
  ],
  [
    "id" => 2,
    "name" => "Karabo's Business",
    "slogan" => "We offer bags and more",
    "category" => ["Fashion"],
    "description" => "Karabo's Corner: Your One-Stop Shop for Sustainable Bags and Accessories",
    "location" => "Limpopo, Maganeng",
    "contact_info" => "+27 11 (346) 6780"
  ],
  [
    "id" => 3,
    "name" => "MaThings",
    "slogan" => "Your go to bags",  // Consider updating with a more relevant slogan based on actual description
    "category" => ["Fashion"],
    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",  // Replace with actual description
    "location" => "Gauteng, Tokoza",
    "contact_info" => "+27 11 567 8906"
  ],
  [
    "id" => 4,
    "name" => "Themba's Tech Fix",
    "slogan" => "We keep your tech alive",
    "category" => ["Technology"],
    "description" => "Themba's Tech Fix is your one-stop shop for all your tech needs. We offer expert repair services for laptops, smartphones, tablets, and more. We also sell a variety of new and pre-owned devices.",
    "location" => "Pretoria, Gauteng, South Africa",
    "contact_info" => "+27 12 345 2198"
  ],
  [
    "id" => 5,
    "name" => "Khwezi Clothing",
    "slogan" => "Wearable stories. Sustainable style.",
    "category" => ["Fashion"],
    "description" => "Khwezi Clothing designs and creates unique, ethically-made clothing and accessories. We use traditional African fabrics and techniques to celebrate South African culture and empower local artisans.",
    "location" => "Stellenbosch, Western Cape, South Africa",
    "contact_info" => "+27 21 880 0976; khwezi@clothing.co.za"
  ],
  [
    "id" => 6,
    "name" => "Recycle & Reuse",
    "slogan" => "Giving things a second chance, for a greener future",
    "category" => ["Construction"],  // Consider a more relevant category like "Recycling"
    "description" => "Relebohile's Recycle & Reuse is passionate about protecting the environment. We offer a convenient and responsible way to recycle and upcycle unwanted items, while also providing unique, second-hand treasures.",
    "location" => "Durban, KwaZulu-Natal, South Africa",
    "contact_info" => "+27 31 337 5420"
  ],
  [
    "id" => 7,
    "name" => "Flavor Kitchen",
    "slogan" => "A taste of home, made with love.",
    "category" => ["Food & Beverages"],
    "description" => "Nthabi's Kitchen is a homegrown business serving up delicious and authentic African cuisine. We use fresh, locally sourced ingredients to create traditional dishes with a modern twist.",
    "location" => "Soweto, Johannesburg, South Africa",
    "contact_info" => "+27 11 494 7896"
  ],
];

// Example search results: For results pulled from the internet (If none are found from the system)
$internetSearchResults = [
  [
    'title' => 'How to Register Your Business as an SMME in South Africa',
    'description' => 'A step-by-step guide on registering your business as an SMME in South Africa, including information on eligibility requirements and the registration process.',
    'url' => 'https://www.gov.za/services/business/register-your-business' // Replace with actual URL
  ],
  [
    'title' => 'Benefits of Being Classified as an SMME in South Africa',
    'description' => 'Explore the advantages of being classified as an SMME in South Africa, including access to financing, tax breaks, and government support programs.',
    'url' => 'https://www.smeda.gov.za/en/programmes/support-for-smes/benefits-of-being-an-sme.html' // Replace with actual URL
  ],
  [
    'title' => 'SMME South Africa: A Guide for Entrepreneurs',
    'description' => 'This comprehensive resource provides valuable information for aspiring and existing SMME owners in South Africa, covering topics like funding, marketing, and legal compliance.',
    'url' => 'https://www.dsbd.gov.za/services/business-support/business-development/business-development-services-for-smes' // Replace with actual URL
  ],
  [
    'title' => 'Top Challenges Faced by SMMEs in South Africa',
    'description' => 'Gain insights into the common challenges faced by SMMEs in South Africa, such as access to capital, navigating regulations, and competing with larger businesses.',
    'url' => 'https://www.businesslive.co.za/bd/companies/entrepreneurship/2022-06-20-the-biggest-challenges-facing-small-businesses-in-sa/' // Replace with actual URL
  ],
  [
    'title' => 'Financial Resources for SMMEs in South Africa',
    'description' => 'Discover various financial resources available to SMMEs in South Africa, including loans, grants, and investment opportunities.',
    'url' => 'https://www.nedbank.co.za/business/support/sme-support/financial-solutions' // Replace with actual URL
  ],
  [
    'title' => 'SMME Networking and Support Organizations in South Africa',
    'description' => 'Find a network of organizations dedicated to supporting SMMEs in South Africa, offering resources, mentorship, and business development opportunities.',
    'url' => 'https://www.nsbfi.co.za/business-support-organisations/' // Replace with actual URL
  ],
  [
    'title' => 'SMME Success Stories in South Africa',
    'description' => 'Get inspired by success stories of thriving SMMEs in South Africa, learning from their experiences and gaining valuable insights for your own business journey.',
    'url' => 'https://www.entrepreneur.com/en/south-africa/success-stories/385001' // Replace with actual URL
  ],
  [
    'title' => 'SMME Definition and Criteria in South Africa',
    'description' => 'Understand the official definition of an SMME in South Africa and the criteria used to categorize businesses based on size and workforce.',
    'url' => 'https://www.cipc.co.za/content/what-is-a-small-medium-and-micro-enterprise-sme' // Replace with actual URL
  ],
  [
    'title' => 'Government Grants and Incentives for SMMEs in South Africa',
    'description' => 'Explore various government grants and incentive programs available to SMMEs in South Africa, designed to promote business growth and development.',
    'url' => 'https://www.smeda.gov.za/en/programmes/support-for-smes/government-grants-and-incentives' // Replace with actual URL
  ],
  [
    'title' => 'The Role of SMMEs in the South African Economy',
    'description' => 'Learn about the critical role SMMEs play in the South African economy, including job creation, economic growth, and fostering innovation.',
    'url' => 'https://sacci.org.za/sme-development/' // Replace with actual URL
  ],
];
?>

<body x-data="" class="is-header-blur" x-bind="$store.global.documentBody">
    <!-- App preloader -->

    <!-- Page Wrapper -->
    <div id="root" class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900">

        @include('components.top-navigation-bar')

        <!-- Main Content Wrapper -->
        <main class="main-content w-full px-[var(--margin-x)] pb-8">
            <div class="flex items-center space-x-4 py-5 lg:py-6">
                <svg x-ignore="" xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">
                    Search Results
                </h2>
            </div>

            <div class="mt-20 space-y-4">
                <div class="space-y-4">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-white"><em> System Results ... </em></h3>
                    @if(count($smmeSearchResults))
                        <div class="space-y-4">
                            @foreach($smmeSearchResults as $smme)
                                <div class="p-4 bg-white dark:bg-gray-800 shadow rounded-lg">
                                    <h3 class="text-lg font-medium text-gray-900 dark:text-white">
                                        <a href="{{ route('smmes.show', ['smme' => $smme['id']]) }}" class="hover:underline">{{ $smme['name'] }}</a>
                                    </h3>
                                    <p class="mt-1 text-gray-600 dark:text-gray-400">{{ Str::limit($smme['description'], 250, '...') }}</p>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-gray-600 dark:text-gray-400">No results found from the SMMEs list. Try adjusting your search.</p>
                    @endif
                </div>

                <div class="space-y-4">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-white"><em>Internet Results ...</em></h3>
                    @if(count($internetSearchResults))
                        <div class="space-y-4">
                            @foreach($internetSearchResults as $result)
                                <div class="p-4 bg-white dark:bg-gray-800 shadow rounded-lg">
                                    <h3 class="text-lg font-medium text-gray-900 dark:text-white">
                                        <a href="{{ $result['url'] }}" class="hover:underline">{{ $result['title'] }}</a>
                                    </h3>
                                    <p class="mt-1 text-gray-600 dark:text-gray-400">{{ Str::limit($result['description'], 250, '...') }}</p>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-gray-600 dark:text-gray-400">No results found from the internet. Try adjusting your search.</p>
                    @endif
                </div>
            </div>
        </main>
    </div>
</body>

@endsection
