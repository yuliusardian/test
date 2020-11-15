### Git flow

Pada baris pertama terdapat branch master dengan inital commit dan release tag v0.1.
Dari branch master dibuatkan branch develop.
Dari branch master dibuatkan branch hotfix, kemudian dilakukan merge ke master dan release tag v0.2.
Dari branch hotfix ini dilakukan merge ke branch develop untuk mendapatkan update hotfix dari branch ini.
Dari branch develop terdapat 2 branch feature dibaris ke 5 dan ke 6. Pada baris ke 5 setelah 2 commitan/update dilakukan merge ke branch develop dan dibuatkan branch release(biasanya release-candidate/rc-*) yang kemudian dimerge ke master dengan release tag v1.0 dan dimerge dari branch release ke branch develop
Sedangkan dibaris ke 6 pada branch feature ini terdapat 4 commitan/update




