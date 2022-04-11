var view1 = [
    [1, 'First', 'How do I control my panic attack?', 'https://www.youtube.com/watch?v=JaEeQdGAnGo', 'https://drive.google.com/file/d/1uNEOXmZqf75m7_kxn1nLF73IJ9FWWID0/view?usp=sharing'],
    [2, 'Second', 'How do I control my stress?', 'https://www.youtube.com/watch?v=O6X3KH1TmeM', 'https://drive.google.com/file/d/1OIkhiATqxuWZMrUgTZEFzK_-vEcjWg3X/view?usp=sharing'],
    [3, 'Third', 'How do I control my insecurities?', 'https://www.youtube.com/watch?v=BOeh9RMlwwc', 'https://dosenpsikologi.com/insecure-dalam-psikologi'],
    [4, 'Fourth', 'Self Healing', 'https://www.youtube.com/watch?v=U6qeW1MoK9s', 'https://drive.google.com/file/d/1ekZwKspFLwbwwp4faw1sMM2AZKM8yto-/view?usp=sharing'],
    [5, 'Fifth', 'What is depression and how do I handle it?', 'https://www.youtube.com/watch?v=wr2IqS8bsS4', 'https://drive.google.com/file/d/17_q7nRfDgH3ioGvQqW985pau1cV-sr0m/view?usp=sharing'],
    [6, 'Sixth', 'What is the difference between stress and depression?', 'https://www.youtube.com/watch?v=HbJLJY4nswA', 'https://www.sehatq.com/artikel/sering-dianggap-sama-ini-perbedaan-stres-dan-depresi'],
    [7, 'Seventh', 'How do I control my overthinking?', 'https://www.youtube.com/watch?v=NbIJDsAeZNU', 'https://drive.google.com/file/d/1I6yOzao_jZWRzPDM_nuQJEyQD4n9E28t/view?usp=sharing'],
    [8, 'Eight', 'Self Love', 'https://www.youtube.com/watch?v=bSy4jf36sTA', 'https://drive.google.com/file/d/1ATQZFHfCXNrdDttaVRRvkArTx8wCnv5R/view?usp=sharing'],
    [9, 'Ninth' ,'Meditation' ,'https://www.youtube.com/watch?v=ozaFsRbcC4o' ,'https://drive.google.com/file/d/1VcpBwZ5CJyhGQLM7s9iYG8-_aWAxFlrx/view?usp=sharing'],
    [10, 'Tenth', 'Accept failure and forgive yourself', 'https://www.youtube.com/watch?v=sYnglFLox4U', 'https://drive.google.com/file/d/1lB6W5m-29cfEsIBIpjoMJxbu57Res495/view?usp=sharing']
]

var view2 = [
    [11, 'Eleventh', 'How do I control my stress?', '#', '#'],
    [12, 'Twelfth', 'How do I control my stress?', '#', '#'],
    [13, 'Thirteenth', 'How do I control my stress?', '#', '#'],
    [14, 'Fourteenth', 'How do I control my stress?', '#', '#'],
    [15, 'Fifteenth', 'How do I control my stress?', '#', '#'],
    [16, 'Sixteenth', 'How do I control my stress?', '#', '#'],
    [17, 'Seventeenth', 'How do I control my stress?', '#', '#'],
    [18, 'Eighteenth', 'How do I control my stress?', '#', '#'],
    [19, 'Nineteenth', 'How do I control my stress?', '#', '#'],
    [20, 'Twentieth', 'How do I control my stress?', '#', '#']
]

var view3 = [
    [21, 'Twenty-first', 'How do I control my stress?', '#', '#'],
    [22, 'Twenty-second', 'How do I control my stress?', '#', '#'],
    [23, 'Twenty-third', 'How do I control my stress?', '#', '#'],
    [24, 'Twenty-fourth', 'How do I control my stress?', '#', '#'],
    [25, 'Twenty-fifth', 'How do I control my stress?', '#', '#'],
    [26, 'Twenty-sixth', 'How do I control my stress?', '#', '#'],
    [27, 'Twenty-seventh', 'How do I control my stress?', '#', '#'],
    [28, 'Twenty-eight', 'How do I control my stress?', '#', '#'],
    [29, 'Twenty-9inth', 'How do I control my stress?', '#', '#'],
    [20, 'Thirtieth', 'How do I control my stress?', '#', '#']
]



21
22
23
24
25
26
27
28
29
30

function fungsi(input) {
  var data=""
  for (var n = 0; n < input.length; n++) {
    data += `
        <div class="row justify-content-center align-items-center my-4">
          <div class="col-12">
            <p class="h3">Day ${input[n][0]} - ${input[n][2]}</p>
          </div>
          <div class="col-2 text-center">
            <a href="${input[n][3]}"><i class="fas fa-film icon"></i></a>
          </div>
          <div class="col-10">
            <p class="h4"><a href="${input[n][3]}">${input[n][1]} Day Video</a></p>
          </div>
          <div class="w-100"></div>
          <br>
          <div class="w-100"></div>
          <div class="col-2 text-center">
            <a href="${input[n][4]}"><i class="fas fa-tasks icon"></i></a>
          </div>
          <div class="col-10">
            <p class="h4"><a href="${input[n][4]}">${input[n][1]} Day Modul</a></p>
          </div>
        </div>
            `
  }
  return data
}