/* =========================================
   1. CORE SITE LOGIC
   ========================================= */

/* Mobile Menu Logic */
function toggleMobileMenu() {
    const mobileMenu = document.getElementById('mobileMenu');
    const hamburger = document.querySelector('.hamburger');
    if (mobileMenu && hamburger) {
        mobileMenu.classList.toggle('active');
        hamburger.classList.toggle('active');
    }
}

function closeMobileMenu() {
    const mobileMenu = document.getElementById('mobileMenu');
    const hamburger = document.querySelector('.hamburger');
    if(mobileMenu) mobileMenu.classList.remove('active');
    if(hamburger) hamburger.classList.remove('active');
}

/* Navbar Scroll Effect */
window.addEventListener('scroll', () => {
    const nav = document.querySelector('nav');
    if(nav) {
        if (window.scrollY > 50) {
            nav.style.background = 'rgba(0, 0, 0, 0.98)';
            nav.style.boxShadow = '0 4px 20px rgba(0,0,0,0.5)';
        } else {
            nav.style.background = 'rgba(0, 0, 0, 0.95)';
            nav.style.boxShadow = 'none';
        }
    }
});

/* Smooth Fade In */
document.addEventListener('DOMContentLoaded', () => {
    document.body.style.opacity = '1';
    document.body.style.transition = 'opacity 0.4s ease-in';
    
    console.log("🔹 Light House: Core Loaded");
    
    // START THE GATEKEEPER
    initStrictLeadCapture();
});

/* Close Menu on Outside Click */
document.addEventListener('click', (e) => {
    const mobileMenu = document.getElementById('mobileMenu');
    const hamburger = document.querySelector('.hamburger');
    if (mobileMenu && mobileMenu.classList.contains('active') && !mobileMenu.contains(e.target) && !hamburger.contains(e.target)) {
        closeMobileMenu();
    }
});

/* Fallback for logo loading */
function handleLogoError() {
   const logoImg = document.getElementById('heroLogo');
   const fallbackIcon = document.getElementById('fallbackIcon');
   if(logoImg) logoImg.style.display = 'none';
   if(fallbackIcon) fallbackIcon.style.display = 'block';
}

/* =========================================
   2. STRICT LEAD CAPTURE SYSTEM
   ========================================= */

// Variable to store where the user WANTED to go
let pendingDestination = null;

// The HTML for the modal
// const MODAL_HTML = `
// <div id="leadModal" class="fixed inset-0 z-[9999] hidden items-center justify-center">
//     <div class="absolute inset-0 bg-black/95 backdrop-blur-md transition-opacity"></div>
//     <div class="relative w-full max-w-md mx-4 z-10">
//         <div class="card-luxury p-8 rounded-2xl border-2 border-yellow-500/30 shadow-[0_0_50px_rgba(255,215,0,0.15)]">
//             <div class="text-center mb-6">
//                 <div class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-full flex items-center justify-center mx-auto mb-4 premium-glow">
//                     <i class="fas fa-unlock-alt text-black text-2xl"></i>
//                 </div>
//                 <h3 class="font-display text-2xl font-bold text-yellow-400 mb-2">Unlock Catalogue</h3>
//                 <p class="text-gray-400 text-sm">Please share your details to access our exclusive premium collection.</p>
//             </div>
//             <form id="leadForm" class="space-y-4">
//                 <div><input type="text" name="name" id="leadName" placeholder="Your Name" required class="w-full p-4 bg-gray-900/50 border border-yellow-500/20 rounded-lg focus:border-yellow-400 focus:outline-none text-white transition-all hover:border-yellow-500/40"></div>
//                 <div><input type="tel" name="phone" id="leadPhone" placeholder="Mobile Number" required pattern="[0-9]{10}" class="w-full p-4 bg-gray-900/50 border border-yellow-500/20 rounded-lg focus:border-yellow-400 focus:outline-none text-white transition-all hover:border-yellow-500/40"></div>
//                 <div>
//                     <select name="position" id="leadPosition" required class="w-full p-4 bg-gray-900/50 border border-yellow-500/20 rounded-lg focus:border-yellow-400 focus:outline-none text-white transition-all hover:border-yellow-500/40 appearance-none">
//                         <option value="" disabled selected class="text-gray-500">I am a...</option>
//                         <option value="Customer" class="bg-gray-900">Customer/Homeowner</option>
//                         <option value="Architect" class="bg-gray-900">Architect</option>
//                         <option value="Builder" class="bg-gray-900">Builder/Developer</option>
//                         <option value="Contractor" class="bg-gray-900">Contractor</option>
//                         <option value="Electrician" class="bg-gray-900">Electrician</option>
//                         <option value="Other" class="bg-gray-900">Other</option>
//                     </select>
//                 </div>
//                 <div><textarea name="requirement" id="leadRequirement" placeholder="Requirement (Optional)" rows="2" class="w-full p-4 bg-gray-900/50 border border-yellow-500/20 rounded-lg focus:border-yellow-400 focus:outline-none text-white transition-all hover:border-yellow-500/40"></textarea></div>
//                 <button type="submit" id="submitLeadBtn" class="w-full btn-luxury py-4 rounded-lg text-black font-bold text-lg uppercase tracking-wider hover:shadow-[0_0_20px_rgba(255,215,0,0.4)]">Continue to Catalogue</button>
//             </form>
//         </div>
//     </div>
// </div>`;

function initStrictLeadCapture() {
    if (isLeadAuthorized()) return;

    if (!document.getElementById('leadModal')) {
        document.body.insertAdjacentHTML('beforeend', MODAL_HTML);
    }

    const isCataloguePage = window.location.href.includes('catalogue') || window.location.href.includes('viewer');

    if (isCataloguePage) {
        // BLOCK DIRECT ACCESS: If they land here, block immediately
        console.log("🔒 Catalogue Page Detected: Blocking access.");
        setTimeout(openLeadModal, 500); 
    } else {
        // HOMEPAGE: Do NOT open passively. Only lock links.
        console.log("🏠 Homepage: Standing by. Links locked.");
        lockCatalogueLinks(); 
    }

    const form = document.getElementById('leadForm');
    if(form) form.addEventListener('submit', handleLeadSubmit);
}

function isLeadAuthorized() {
    const capturedDate = localStorage.getItem('lh_lead_captured_date');
    if (!capturedDate) return false;
    const sevenDaysInMs = 7 * 24 * 60 * 60 * 1000;
    const now = new Date().getTime();
    return (now - parseInt(capturedDate) < sevenDaysInMs);
}

function lockCatalogueLinks() {
    const links = document.querySelectorAll('a[href*="catalogue"], a[href*="viewer"]');
    links.forEach(link => {
        link.addEventListener('click', function(e) {
            if (!isLeadAuthorized()) {
                e.preventDefault(); 
                pendingDestination = link.href; 
                openLeadModal();    
            }
        });
    });
}

function openLeadModal() {
    const modal = document.getElementById('leadModal');
    if (modal && !isLeadAuthorized()) {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden'; 
    }
}

function closeLeadModal() {
    const modal = document.getElementById('leadModal');
    if (modal) {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.style.overflow = ''; 
    }
}

function handleLeadSubmit(e) {
    e.preventDefault();
    const btn = document.getElementById('submitLeadBtn');
    const originalText = btn.innerHTML;
    
    btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
    btn.disabled = true;

    // Create FormData
    const formData = new FormData(e.target);

    // Send to PHP
    fetch('capture_lead.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            // 1. Mark as authorized
            localStorage.setItem('lh_lead_captured_date', new Date().getTime());
            closeLeadModal();
            
            // 2. Handle Redirect
            if (pendingDestination) {
                window.location.href = pendingDestination;
            } else {
                alert("Thank you! Access Granted.");
                window.location.reload();
            }
        } else {
            alert("Server Error: " + data.message);
            btn.innerHTML = originalText;
            btn.disabled = false;
        }
    })
    .catch(error => {
        console.error("Error:", error);
        alert("Something went wrong. Please check connection.");
        btn.innerHTML = originalText;
        btn.disabled = false;
    });
}