(function () {
  function loadScript(url) {
    return new Promise((resolve) => {
      jQuery.ajax({
        url: url,
        dataType: "script",
        success: resolve,
        async: true,
      });
    });
  }
  
  let scene;
  let modelSrc;
  let gModel;
  let container;

  async function init3d(element, callback) {
    //Scene
    container = element;
    container.insertAdjacentHTML(
      "afterbegin",
      `<div class="model-loader active"></div>`
    );
    if (typeof THREE == "undefined") {
      await loadScript("js/three.min.js");
      await loadScript("js/GLTFLoader.js");
      await loadScript("js/OrbitControls.js");
      
    }
    scene = new THREE.Scene();
    modelSrc = container.getAttribute("data-src");

    // Load Camera Perspektive
    let camera = new THREE.PerspectiveCamera(
      25,
      container.clientWidth / container.clientHeight,
      1,
      20000
    );
    camera.position.set(1, 10, 70);

    // Load a Renderer
    let renderer = new THREE.WebGLRenderer({ alpha: false });
    renderer.setClearColor(0xffffff);
    renderer.setPixelRatio(window.devicePixelRatio);
    renderer.setSize(container.clientWidth, container.clientHeight);
    container.appendChild(renderer.domElement);

    // Load the Orbitcontroller
       let controls = new THREE.OrbitControls(camera, renderer.domElement);

    // Load Light
    let ambientLight = new THREE.AmbientLight(0xcccccc);
    scene.add(ambientLight);

    let directionalLight = new THREE.DirectionalLight(0xffffff);
    directionalLight.position.set(0, 1, 1).normalize();
    scene.add(directionalLight);

    // glTf 2.0 Loader
    let loader = new THREE.GLTFLoader();
    loader.load(modelSrc, function (gltf) {
      gModel = gltf.scene.children[0];
      gltf.scene.scale.set(2, 2, 2);
      gltf.scene.position.x = 0; //Position (x = right+ left-)
      gltf.scene.position.y = 0; //Position (y = up+, down-)
      gltf.scene.position.z = 0; //Position (z = front +, back-)
      callback();
      scene.add(gltf.scene);
      animate();
      container.parentNode.classList.add('loaded')
    });

    // animate
    function animate() {
      requestAnimationFrame(animate);
      gModel.rotation.z += 0.002;
      controls.update();
      render();
    }
    function render() {
      renderer.render(scene, camera);
    }

    //Resize
    function onWindowResize() {
      camera.aspect = container.clientWidth / container.clientHeight;
      camera.updateProjectionMatrix();

      renderer.setSize(container.clientWidth, container.clientHeight);
    }
    window.addEventListener("resize", onWindowResize);
  }
 
  function load3DOnScroll() {
    if (document.querySelectorAll(".model-container").length) {
      document
        .querySelectorAll(".model-container:not(.loaded)")
        .forEach(container => {
          if (window.innerWidth > 1199) {
            if (
              container.getBoundingClientRect().top <
              window.innerHeight * 0.6
            ) {
              window.removeEventListener("scroll", load3DOnScroll);
              init3d(container.querySelector(".scene"), () => {
                container.querySelector(".model-loader").classList.remove("active");
                container.classList.add("active");
                window.addEventListener("scroll", load3DOnScroll);
              });
            }
          } else {
            if (
              container.getBoundingClientRect().top < window.innerHeight
            ) {
              window.removeEventListener("scroll", load3DOnScroll);
              init3d(container.querySelector(".scene"), () => {
                container
                  .querySelector(".model-loader")
                  .classList.remove("active");
                container.classList.add("active");
                window.addEventListener("scroll", load3DOnScroll);
              });
            }
          }
        });
    }
  }
  window.addEventListener("scroll", load3DOnScroll);
  load3DOnScroll();
})();
