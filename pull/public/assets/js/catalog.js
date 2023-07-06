// Sticky Header
$(window).scroll(function () {
  if ($(window).scrollTop() > 100) {
    $(".main_h").addClass("sticky");
  } else {
    $(".main_h").removeClass("sticky");
  }
});

// Mobile Navigation
$(".mobile-toggle").click(function () {
  if ($(".main_h").hasClass("open-nav")) {
    $(".main_h").removeClass("open-nav");
  } else {
    $(".main_h").addClass("open-nav");
  }
});

$(".main_h li a").click(function () {
  if ($(".main_h").hasClass("open-nav")) {
    $(".navigation").removeClass("open-nav");
    $(".main_h").removeClass("open-nav");
  }
});

// Navigation Scroll
$("nav a").click(function (event) {
  var id = $(this).attr("href");
  var offset = 70;
  var target = $(id).offset().top - offset;
  $("html, body").animate(
    {
      scrollTop: target,
    },
    500
  );
  event.preventDefault();
});

//search
const input = document.getElementById('input');
const minPriceInput = document.getElementById('min-price');
const maxPriceInput = document.getElementById('max-price');
const ascendingCheckbox = document.querySelector('input[name="task_03"]:first-of-type');
const descendingCheckbox = document.querySelector('input[name="task_03"]:last-of-type');
const catalogItems = document.querySelectorAll('.catalog');

input.addEventListener('input', handleSearch);
minPriceInput.addEventListener('input', handleSearch);
maxPriceInput.addEventListener('input', handleSearch);
ascendingCheckbox.addEventListener('change', handleSorting);
descendingCheckbox.addEventListener('change', handleSorting);

function handleSearch() {
  const searchText = input.value.toLowerCase();
  const minPrice = parseFloat(minPriceInput.value) || 0;
  const maxPrice = parseFloat(maxPriceInput.value) || Infinity;

  catalogItems.forEach(catalogItem => {
    const productName = catalogItem.querySelector('.card-title h4').textContent;
    const productPrice = parseFloat(catalogItem.querySelector('.card-interaction h4').textContent.replace('Rp. ', ''));

    const nameMatch = productName.toLowerCase().includes(searchText);
    const priceMatch = productPrice >= minPrice && productPrice <= maxPrice;

    if (nameMatch && priceMatch) {
      catalogItem.style.display = 'block';
    } else {
      catalogItem.style.display = 'none';
    }
  });
}

function handleSorting() {
  const isAscending = ascendingCheckbox.checked;
  const isDescending = descendingCheckbox.checked;

  if (isAscending) {
    sortCatalogItems('asc');
  } else if (isDescending) {
    sortCatalogItems('desc');
  } else {
    resetSorting();
  }
}

function sortCatalogItems(order) {
  const sortedItems = Array.from(catalogItems).sort((a, b) => {
    const nameA = a.querySelector('.card-title h4').textContent.toLowerCase();
    const nameB = b.querySelector('.card-title h4').textContent.toLowerCase();
    return order === 'asc' ? nameA.localeCompare(nameB) : nameB.localeCompare(nameA);
  });

  const container = document.querySelector('.box-container');
  container.innerHTML = '';

  if (order === 'desc') {
    sortedItems.reverse();
  }

  sortedItems.forEach(item => container.appendChild(item));
}

function resetSorting() {
  const container = document.querySelector('.box-container');
  container.innerHTML = '';
  Array.from(catalogItems).forEach(item => container.appendChild(item));
}





