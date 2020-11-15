# Perbedaan git merge dan rebase

Merge dan Rebase adalah usaha untuk menyatukan perubahan dari dua git branch yang berbeda. Untuk penggambaran lebih lengkapnya dapat dilihat di diagram ini.

![Screen](https://miro.medium.com/proxy/1*pzT4KMiZDOFsMOKH-cJjfQ.png)

Dapat dilihat dari branch diatas, ada dua branch yang berbeda yaitu master dan feature. Ketika mege dilakukan, maka commit dari branch feature akan diintegrasikan ke master melalui sebuah commit. Dalam merge, biasanya terdapat commit baru yaitu ketika penggabungan (merge) dilakukan. Sementara berbeda dengan merge, rebase tidak menggabungkan keduanya, melainkan membuat timeline commit menjadi satu, oleh karena itu akan menghapus branch feature.

# Keuntungan dan Kerugian

Dalam merge, kita bisa dengan mudah untuk melihat branch feature yang ada, sehingga lebih mudah untuk men-debug jika dikemudian hari ditemukan error. Merge juga memudahkan kita untuk bekerja dalam tim karena dapat dengan mudah melihat feature dari masing-masing orang yang terlibat.

Rebase dalam lain kesempatan tidak sulit untuk melihat timeline karena hanya ada satu garis timeline. Akan tetapi rebase hanya cocok jika bekerja sendiri karena dengan begitu kita tidak repot untuk tahu siapa yang mengerjakan yang mana.

###### Sumber
[1. Merge vs Rebase](https://medium.com/@bagasirwansyah/merge-vs-rebase-cc8b22d0ad44)
[1. git — Rebase vs Merge](https://medium.com/datadriveninvestor/git-rebase-vs-merge-cc5199edd77c)