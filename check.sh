 PIDS=`ps aux | grep command.php | grep -v grep`
 if [ -z "$PIDS" ]; then
     echo "Starting command.php ..."
     php command.php >> script.log &
 else
     echo "command.php already running."
 fi