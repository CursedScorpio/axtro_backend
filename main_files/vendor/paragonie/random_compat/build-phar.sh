<<<<<<< HEAD
#!/usr/bin/env bash

basedir=$( dirname $( readlink -f ${BASH_SOURCE[0]} ) )

=======
#!/usr/bin/env bash

basedir=$( dirname $( readlink -f ${BASH_SOURCE[0]} ) )

>>>>>>> 0aeda949 (Updating backend files in main_files)
php -dphar.readonly=0 "$basedir/other/build_phar.php" $*