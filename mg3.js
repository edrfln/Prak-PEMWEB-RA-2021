var input = document.getElementById("input")
            var button = document.getElementById("button")
            var demo = document.getElementById("demo")

            //fungsi display untuk fitur menampilkan teks cuaca
            function display(){
                var e = document.getElementById("weather");
                var index = e.selectedIndex;
                //index opsi dimulai dari 0
                //menampilkan teks sesuai dengan nomor indeks
                if(index==0){
                    document.getElementById("sunny").style.display = 'block'
                    document.getElementById("rainy").style.display = 'none'
                    document.getElementById("cloudy").style.display = 'none'
                }else if (index==1){
                    document.getElementById("sunny").style.display = 'none'
                    document.getElementById("rainy").style.display = 'block'
                    document.getElementById("cloudy").style.display = 'none'
                }else if(index==2){
                    document.getElementById("sunny").style.display = 'none'
                    document.getElementById("rainy").style.display = 'none'
                    document.getElementById("cloudy").style.display = 'block'
                }
            }
            
            //fungsi untuk mengubah tema menjadi gelap/terang
            function DarkMode(isDark){
                var darkBtn = document.getElementById('darkMode')
                var lightBtn = document.getElementById('lightMode')

                //menampilkan tampilan css sesuai dengan tombol yg ditekan
                if(isDark){
                    lightBtn.style.display = "block"
                    darkBtn.style.display = "none"
                }else{
                    lightBtn.style.display = "none"
                    darkBtn.style.display = "block"
                }

                document.body.classList.toggle("darkmode");
                }

            if(localStorage.getItem('preferredTheme') == 'dark') {
                DarkMode(true)
            
            }

            //menghitung faktorial
            button.addEventListener("click",function(e) {
                e.preventDefault()

                //perulangan for menurun dengan mengurangi angka inputan pengguna
                var n = input.value;
                var hasil = 1; //menyimpan jumlah hitungan tiap perulangan
                for(var i = n; i>0; i--){
                    hasil = hasil * i;
                }

            demo.innerHTML = 'The factorial of ' + n + ' is ' + hasil;
            
            })