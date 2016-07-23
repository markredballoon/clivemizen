# Early development. Not even test ready yet.
# Script for checking all php files in repository looking for dependancies.
# This is to help move all the correct files across from the proto folder into the WP theme.

import glob
path = "path/to/dir/"

# Run through whole directory and parse all php files.
combFile = []
for file in glob.glob( path+"*.php" ):
	with open(file, 'r') as myfile:
    	data = myfile.read().replace('\n', '')
		dataList = data.split(str="/>", num=string.count(str))
		combFile.extend(dataList)

uniqueURLs = []
for i in combFile:
	# run through list and add all unique files into new list


output = open( path+"output.txt", "wb")
output.write()
