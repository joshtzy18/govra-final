
<x-app-layout>
@include('components/nav')
@include('components/highlights-directory-nav')

  <div class="container mx-auto p-4">
    <div class="flex items-center justify-center">
      <!-- Government Logo (Left side of Government Name and Type) -->
      <img src="assets/images/csc logo.png" alt="Government Logo" class="w-40 h-40 mr-2">

      <div class="text-center">
        <!-- Government Name (Top) -->
        <h1 class="text-xl font-bold cursor-pointer" onclick="toggleDetails('overview')">Government Name</h1>
        <p class="text-gray-500">Government Type</p>
      </div>
    </div>

    <!-- Government Overview, Jobs Offer, Reviews -->
    <div class="flex justify-center mt-4 space-x-4">
      <h2 id="overviewTitle" class="text-lg font-bold cursor-pointer border-b-2 border-transparent hover:border-blue-500" onclick="toggleDetails('overview')">Government Overview</h2>
      <h2 id="jobsTitle" class="text-lg font-bold cursor-pointer border-b-2 border-transparent hover:border-blue-500" onclick="toggleDetails('jobs')">Jobs Offer</h2>
      <h2 id="reviewsTitle" class="text-lg font-bold cursor-pointer border-b-2 border-transparent hover:border-blue-500" onclick="toggleDetails('reviews')">Reviews</h2>
    </div>

    <!-- Display Details -->
    <div class="my-4 text-center">
      <!-- Display Government Name Details -->
      <h2 id="governmentNameDetails" class="text-lg font-bold hidden">Government Name</h2>

      <!-- Display Government Overview Details -->
      <div id="overviewDetails" class="hidden">
        <h2 class="text-left text-2xl font-bold" id="sectionTitle">Government Overview</h2>
        <p id="sectionDesc" class="text-left text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Government Overview Details...</p>
      </div>

      <!-- Display Jobs Offer Details -->
      <div id="jobsDetails" class="hidden">
        <h2 class="text-left text-2xl font-bold" id="sectionTitle">Jobs Offer</h2>
        <p id="sectionDesc" class="text-left text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Jobs Offer Details...</p>
      </div>

      <!-- Display Reviews Details -->
      <div id="reviewsDetails" class="hidden">
        <h2 class="text-left text-2xl font-bold" id="sectionTitle">Reviews</h2>
        <p id="sectionDesc" class="text-left text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Reviews Details...</p>
      </div>

      <!-- Display Other Sections Details -->
      <div id="sectionDetails" class="hidden">
        <h2 class="text-2xl font-bold" id="sectionTitle"></h2>
        <p id="sectionDesc" class="text-gray-500"></p>
      </div>

      <!-- Vision and Mission Section (Aligned) -->
      <div class="flex justify-center mt-4 space-x-8">
        <!-- Vision Section -->
        <div class="text-center p-4 shadow-lg">
          <i class="ion ion-eye w-12 h-12 text-[50px] text-black"></i>
          <h1 class="text-lg font-bold text-black">Vision</h1>
          <p class="text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium laboriosam explicabo asperiores perferendis inventore voluptate facilis. Eius perferendis illum ad esse dolor recusandae, impedit cupiditate labore accusantium consequuntur veniam sapiente.</p>
        </div>

        <!-- Mission Section -->
        <div class="text-center  p-4 shadow-lg">
          <i class="ion ion-clipboard w-12 h-12 text-[50px] text-black"></i>
          <h1 class="text-lg font-bold text-black">Mission</h1>
          <p class="text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse pariatur, fugiat omnis dolorem voluptas quisquam possimus nam dicta velit, mollitia quos ipsa expedita. Illum eligendi totam dignissimos nihil a minima.</p>
        </div>
      </div>

      <!-- Location, Web, and Contact Section (Aligned) -->
      <div class="flex justify-center mt-4 space-x-4">
        <!-- Location Section -->
        <div class="flex items-center space-x-4 p-4 shadow-lg">
          <i class="ion ion-location w-12 h-12 text-[50px] text-black"></i>
          <div>
            <h1 class="text-lg font-bold text-black">Location</h1>
            <p class="text-gray-500">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque omnis, ab alias error libero suscipit repellendus quisquam debitis quos amet esse dignissimos dolorum quae reiciendis nisi rem aspernatur! Ratione, ducimus?</p>
          </div>
        </div>

        <!-- Web Section -->
        <div class="flex items-center space-x-4 p-4 shadow-lg">
            <i class="ion ion-earth w-12 h-12 text-[50px] text-black"></i>
            <div>
              <h1 class="text-lg font-bold text-black">Web</h1>
              <p class="text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, aliquid deleniti nisi delectus saepe dolorem quam, provident eaque iste magnam eum blanditiis in voluptatum hic sit aut iure praesentium expedita?</p>
            </div>
          </div>
          
          

        <!-- Contact Section -->
        <div class="flex items-center space-x-4 p-4 shadow-lg">
          <i class="ion ion-chatbox w-12 h-12 text-[50px] text-black"></i>
          <div>
            <h1 class="text-lg font-bold text-black">Contact</h1>
            <p class="text-gray-500">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, adipisci? Dolorem maiores temporibus optio quaerat explicabo reprehenderit exercitationem molestias, quod tempora dolores vitae? Laboriosam laudantium sed assumenda aut blanditiis velit.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- ... (remaining content) ... -->

    <style>
      .clicked-title {
        text-decoration: underline;
        color: #3b82f6; /* Blue-500 */
      }
    </style>

    <script>
      function toggleDetails(section) {
        const sectionTitleElement = document.getElementById('sectionTitle');
        const sectionDescElement = document.getElementById('sectionDesc');
        const governmentNameDetailsElement = document.getElementById('governmentNameDetails');
        const overviewTitleElement = document.getElementById('overviewTitle');
        const jobsTitleElement = document.getElementById('jobsTitle');
        const reviewsTitleElement = document.getElementById('reviewsTitle');
        const overviewDetailsElement = document.getElementById('overviewDetails');
        const jobsDetailsElement = document.getElementById('jobsDetails');
        const reviewsDetailsElement = document.getElementById('reviewsDetails');
        const sectionDetailsElement = document.getElementById('sectionDetails');

        overviewTitleElement.classList.remove('clicked-title');
        jobsTitleElement.classList.remove('clicked-title');
        reviewsTitleElement.classList.remove('clicked-title');
        governmentNameDetailsElement.classList.add('hidden');
        overviewDetailsElement.classList.add('hidden');
        jobsDetailsElement.classList.add('hidden');
        reviewsDetailsElement.classList.add('hidden');
        sectionDetailsElement.classList.add('hidden');

        if (section === 'governmentName') {
          overviewTitleElement.classList.add('clicked-title');
          overviewDetailsElement.classList.remove('hidden');
          sectionDescElement.textContent = overviewDetailsElement.querySelector('p').textContent;
        } else if (section === 'overview') {
          overviewTitleElement.classList.add('clicked-title');
          overviewDetailsElement.classList.remove('hidden');
          sectionDescElement.textContent = overviewDetailsElement.querySelector('p').textContent;
        } else if (section === 'jobs') {
          jobsTitleElement.classList.add('clicked-title');
          jobsDetailsElement.classList.remove('hidden');
          sectionDescElement.textContent = jobsDetailsElement.querySelector('p').textContent;
        } else if (section === 'reviews') {
          reviewsTitleElement.classList.add('clicked-title');
          reviewsDetailsElement.classList.remove('hidden');
          sectionDescElement.textContent = reviewsDetailsElement.querySelector('p').textContent;
        }
      }
    </script>
  </div>
</x-app-layout>