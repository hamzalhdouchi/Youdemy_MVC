function fetchArticles(tagId) {
    console.log(tagId);

    if (!tagId) {
        document.getElementById('Tage_cards').innerHTML = '';
        return;
    }

    fetch(`../Ajax/filter.php?tag=${tagId}`)
        .then(response => {
            console.log(response);
            if (!response.ok) {
                throw new Error('Failed to fetch articles');
            }
            return response.json();
        })
        .then(data => {
            const cardsContainer = document.getElementById('Tage_cards');
            cardsContainer.innerHTML = ''; 
            data.forEach(cours => {
                const cardHTML = `
            <div class="w-full sm:w-1/2 lg:w-1/3 group grid-item filter1 filter3">
              <div class="tab-content-wrapper sm:px-15px mb-30px">
                <div class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark">
                  <!-- card image -->
                  <div class="relative mb-4">
                    <a href="course-details.html" class="w-full overflow-hidden rounded">
                      <img src="../assets/images/grid/grid_1.png" alt="" class="w-full transition-all duration-300 group-hover:scale-110">
                    </a>
                    <div class="absolute left-0 top-1 flex justify-between w-full items-center px-2">
                      <div>
                        <p class="text-xs text-whiteColor px-4 py-[3px] bg-secondaryColor rounded font-semibold">
                          ${cours.tags}
                        </p>
                      </div>
                      <a class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor" href="#">
                        <i class="icofont-heart-alt text-base py-1 px-2"></i>
                      </a>
                    </div>
                  </div>
                  <!-- card content -->
                  <div>
                    <div class="grid grid-cols-2 mb-15px">
                      <div class="flex items-center"></div>
                      <div class="flex items-center"></div>
                    </div>
                    <a href="course-details.html" class="text-xl font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor">
                      ${cours.titre}
                    </a>
                    <!-- price -->
                    <div class="text-lg font-semibold text-primaryColor font-inter mb-4">
                      ${cours.slogan}
                    </div>
                    <!-- author and rating -->
                    <div class="grid grid-cols-1 md:grid-cols-2 pt-15px border-t border-borderColor">
                      <div>
                        <a href="instructor-details.html" class="text-base font-bold font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor">
                          <img class="w-[30px] h-[30px] rounded-full mr-15px" src="../assets/images/grid/grid_small_1.jpg" alt="">
                          <span class="flex">${cours.nom} ${cours.prenom}</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          `;
                cardsContainer.innerHTML += cardHTML; // Append content
            });
        })
        .catch(error => {
            console.error('Error fetching articles:', error);
            document.getElementById('Tage_cards').innerHTML = '<p class="text-center text-red-500">Error loading articles.</p>';
        });
}
