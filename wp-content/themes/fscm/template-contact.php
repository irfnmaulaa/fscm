<?php 

/*
 * Template Name: Contact
*/
?>

<?php get_header(); ?>

<?php get_template_part('sections/section', 'hero'); ?> 

<div class="w-full" id="contact">
    <div class="container py-20 !max-w-[1108px] flex flex-col-reverse lg:grid lg:grid-cols-2 gap-6">
        <div class="w-full min-w-60 p-6 bg-white outline outline-2 outline-offset-[-1px] outline-neutral-500 inline-flex flex-col justify-start items-center gap-6">
            <div class="self-stretch flex flex-col justify-start items-center gap-6">
            <div class="justify-start text-stone-900 text-3xl font-semibold leading-10">Email Form</div>
            <form class="self-stretch min-w-80 px-6 bg-white rounded-lg flex flex-col justify-start items-center gap-6" method="post" action="">
                <div data-has-description="false" data-has-error="false" data-has-label="true" data-state="Default" data-value-type="Placeholder" class="self-stretch flex flex-col justify-start items-start gap-2">
                <label class="self-stretch justify-start text-stone-900 text-base font-normal leading-6" for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Value" class="self-stretch min-w-60 px-4 py-3 bg-white outline outline-1 outline-offset-[-0.50px] outline-zinc-300 inline-flex justify-start items-center overflow-hidden">
                </div>
                <div data-has-description="false" data-has-error="false" data-has-label="true" data-state="Default" data-value-type="Placeholder" class="self-stretch flex flex-col justify-start items-start gap-2">
                <label class="self-stretch justify-start text-stone-900 text-base font-normal leading-6" for="surname">Surname</label>
                <input type="text" id="surname" name="surname" placeholder="Value" class="self-stretch min-w-60 px-4 py-3 bg-white outline outline-1 outline-offset-[-0.50px] outline-zinc-300 inline-flex justify-start items-center overflow-hidden">
                </div>
                <div data-has-description="false" data-has-error="false" data-has-label="true" data-state="Default" data-value-type="Placeholder" class="self-stretch flex flex-col justify-start items-start gap-2">
                <label class="self-stretch justify-start text-stone-900 text-base font-normal leading-6" for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Value" class="self-stretch min-w-60 px-4 py-3 bg-white outline outline-1 outline-offset-[-0.50px] outline-zinc-300 inline-flex justify-start items-center overflow-hidden">
                </div>
                <div data-has-description="false" data-has-error="false" data-has-label="true" data-state="Default" data-value-type="Placeholder" class="self-stretch flex flex-col justify-start items-start gap-2">
                <label class="self-stretch justify-start text-stone-900 text-base font-normal leading-6" for="message">Message</label>
                <textarea id="message" name="message" placeholder="Value" class="self-stretch min-w-60 min-h-20 px-4 py-3 bg-white outline outline-1 outline-offset-[-0.50px] outline-zinc-300 inline-flex justify-start items-start overflow-hidden resize-none"></textarea>
                </div>
                <div data-align="Justify" data-button-end="true" data-button-start="false" class="w-64 inline-flex justify-end items-center gap-4">
                <button type="submit" data-has-icon-end="false" data-has-icon-start="false" data-size="Medium" data-state="Default" data-variant="Primary" class="flex-1 p-3 bg-zinc-800 outline outline-1 outline-offset-[-1px] outline-zinc-800 flex justify-center items-center gap-2 overflow-hidden">
                    <span class="justify-start text-neutral-100 text-base font-normal leading-4">Submit</span>
                </button>
                </div>
            </form>
            </div>
        </div>
        <div class="w-full p-6 bg-white outline outline-2 outline-offset-[-1px] outline-neutral-500 inline-flex justify-start items-start gap-6 flex-wrap content-start">
            <div class="flex-1 inline-flex flex-col justify-start items-start gap-6">
                <div class="self-stretch justify-start text-Text-Default-Default text-lg font-normal leading-6">PT. FSCM Manufacturing Indonesia memiliki 4 Plant (Pabrik) di 3 lokasi yang masing-masing terletak di:</div>
                <div class="self-stretch flex flex-col justify-start items-start gap-2">
                <div class="self-stretch justify-start text-Text-Default-Default text-3xl font-semibold leading-10">Site 1</div>
                <div class="self-stretch justify-start text-Text-Default-Default text-base font-normal leading-6">Plant I & II <br/> Jl. Raya Pulogadung No. 30 Kawasan Industri Pulogadung Jakarta Timur 13930<br/>Telp: 021 460 0163      Fax 1: 021 460 3688      Fax 2: 021 460 3689</div>
                </div>
                <div class="self-stretch flex flex-col justify-start items-start gap-2">
                <div class="self-stretch justify-start text-Text-Default-Default text-3xl font-semibold leading-10">Site 2</div>
                <div class="self-stretch justify-start text-Text-Default-Default text-base font-normal leading-6">Plant III <br/> Jl. Raya Narogong Km. 15 Pangkalan 6 Cileungsi Bogor<br/>Telp: 021 823 076 061      Fax: 021 823 0350</div>
                </div>
                <div class="self-stretch flex flex-col justify-start items-start gap-2">
                <div class="self-stretch justify-start text-Text-Default-Default text-3xl font-semibold leading-10">Site 3</div>
                <div class="self-stretch justify-start text-Text-Default-Default text-base font-normal leading-6">Plant IV <br/> Jl. By pass krian Km. 26 No. 8 Desa Barengkrajan Kec. Krian Sidoarjo - Jawa Timur<br/>Telp: 021 897 2425      Fax: 031 709 6028</div>
                </div>
            </div>
        </div>    
    </div>

    <div class="container flex justify-center py-20 ">
        <div class="w-full mx-auto !max-w-[720px] bg-white inline-flex justify-start items-start gap-6 flex-wrap content-start">
            <div class="flex-1 inline-flex flex-col justify-start items-start gap-6">
                <div class="self-stretch justify-start text-stone-900 text-3xl font-semibold leading-10 text-center ">Temukan Sparepart Kami Melalui<br/> Dealer Resmi</div>
                
                <div class="border border-[#D9D9D9] w-full">
                    <input type="checkbox" checked id="accordion-0" class="peer hidden accordion-checkbox">    
                    <label for="accordion-0" class="flex justify-between text-[24px] px-4 py-2 items-center cursor-pointer hover:bg-gray-100">
                        <div>Jawa - Bali - Maluku</div>
                        <div class="accordion-icon transition-transform duration-300 rotate-180">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 12.5L10 7.5L5 12.5" stroke="var(--Icon-Default-Default, #1E1E1E)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </label>
                    <div class="max-h-0 px-4 peer-checked:pb-2 overflow-hidden transition-all duration-300 peer-checked:max-h-[100vh] text-left peer-checked:my-2">
                        <table class="simple-table">
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>PT Kharisma Suma Jaya Sakti</td>
                                    <td>Jawa Timur
Maluku</td>
                                    <td>0813 3051 8332</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>PT Jateng TOP</td>
                                    <td>Jawa Tengah
DI Yogyakarta</td>
                                    <td>0812 2835 9191</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>PT Sigma Jaya Mitra Abadi</td>
                                    <td>Jakarta
Bekasi
Bogor
Depok
Cikarang</td>
                                    <td>0821 1125 5771</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>CV Tjakrawala Sinar Perkasa</td>
                                    <td>Jawa Barat
(kecuali Bekasi, Bogor, Depok, Cikarang)</td>
                                    <td>0853 2477 4660</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>PT Karya Sarana Cipta Mandiri</td>
                                    <td>Banten</td>
                                    <td>0813 1713 1101</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>CV Bali Aman Berniaga</td>
                                    <td>Bali</td>
                                    <td>0821 3214 2233</td>
                                </tr>
                            </tbody>
                        </table>


                    </div>
                </div>
                
                <div class="border border-[#D9D9D9] w-full">
                    <input type="checkbox" id="accordion-1" class="peer hidden accordion-checkbox">    
                    <label for="accordion-1" class="flex justify-between text-[24px] px-4 py-2 items-center cursor-pointer hover:bg-gray-100">
                        <div>Suamtera</div>
                        <div class="accordion-icon transition-transform duration-300 rotate-180">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 12.5L10 7.5L5 12.5" stroke="var(--Icon-Default-Default, #1E1E1E)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </label>
                    <div class="max-h-0 px-4 peer-checked:pb-2 overflow-hidden transition-all duration-300 peer-checked:max-h-[100vh] text-left peer-checked:my-2">
                        <table class="simple-table">
                            <tbody>
                                <tr>
                                    <td>7</td>
                                    <td>PT Lotus Pradipta Mulia</td>
                                    <td>Sumatra Utara<br>Aceh</td>
                                    <td>0852 6139 2737</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>PT Assia Kharisma Nusantara</td>
                                    <td>Kepulauan Riau</td>
                                    <td>0821 6398 6691</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>PT Hasta Raya Sumbar</td>
                                    <td>Sumatra Barat</td>
                                    <td>0852 6364 0813</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>CV Rajawali Perkasa</td>
                                    <td>Bangka Belitung</td>
                                    <td>0852 7391 9000</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>CV Kita Mitra Sejati</td>
                                    <td>Sumatra Selatan<br>Bengkulu</td>
                                    <td>0823 7661 6633</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>PT Sumber Kencana Sakti</td>
                                    <td>Jambi</td>
                                    <td>0852 6644 7604</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>PT Mitra Mekar Mandiri</td>
                                    <td>Lampung</td>
                                    <td>0895 3644 96018</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>PT Mitra Riau Perkasa</td>
                                    <td>Riau</td>
                                    <td>0852 7863 5225</td>
                                </tr>
                            </tbody>
                        </table>  
                    </div>
                </div>

                <div class="border border-[#D9D9D9] w-full">
                    <input type="checkbox" id="accordion-2" class="peer hidden accordion-checkbox">    
                    <label for="accordion-2" class="flex justify-between text-[24px] px-4 py-2 items-center cursor-pointer hover:bg-gray-100">
                        <div>Kalimantan</div>
                        <div class="accordion-icon transition-transform duration-300 rotate-180">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 12.5L10 7.5L5 12.5" stroke="var(--Icon-Default-Default, #1E1E1E)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </label>
                    <div class="max-h-0 px-4 peer-checked:pb-2 overflow-hidden transition-all duration-300 peer-checked:max-h-[100vh] text-left peer-checked:my-2">
                        <table class="simple-table">
                            <tbody>
                                <tr>
                                    <td>15</td>
                                    <td>CV Alkaline Electrical Parts</td>
                                    <td>Kalimantan Selatan<br>Kalimantan Tengah</td>
                                    <td>0852 6862 7777</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>CV Delta Chandra Partsindo</td>
                                    <td>Kalimantan Timur<br>Kalimantan Utara</td>
                                    <td>0813 4715 3827</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>PT Dewata Satya Tanjungpura</td>
                                    <td>Kalimantan Barat</td>
                                    <td>0811 577 532</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>

                <div class="border border-[#D9D9D9] w-full">
                    <input type="checkbox" id="accordion-3" class="peer hidden accordion-checkbox">    
                    <label for="accordion-3" class="flex justify-between text-[24px] px-4 py-2 items-center cursor-pointer hover:bg-gray-100">
                        <div>Sulawesi - Papua - Nusa Tenggara</div>
                        <div class="accordion-icon transition-transform duration-300 rotate-180">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 12.5L10 7.5L5 12.5" stroke="var(--Icon-Default-Default, #1E1E1E)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </label>
                    <div class="max-h-0 px-4 peer-checked:pb-2 overflow-hidden transition-all duration-300 peer-checked:max-h-[100vh] text-left peer-checked:my-2">
                        <table class="simple-table">
                            <tbody>
                                <tr>
                                    <td>18</td>
                                    <td>UD Mitra Sukses</td>
                                    <td>Sulawesi Selatan</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>PT Casulut Lubrindo Utama</td>
                                    <td>Sulawesi Utara<br>Gorontalo</td>
                                    <td>0821 8996 1015</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>UD Dewi Motor</td>
                                    <td>Papua</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>PT Buanamas Makmur Persada</td>
                                    <td>Sulawesi Selatan</td>
                                    <td>0812 4172 6789</td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>PT Timor Inti Manunggal</td>
                                    <td>NTB<br>NTT</td>
                                    <td>0823 1218 1423</td>
                                </tr>
                            </tbody>
                        </table>


                    </div>
                </div>

            </div>
        </div>
    </div>
</div> 

<?php get_footer(); ?>
