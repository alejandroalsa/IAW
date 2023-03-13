#!/bin/bash

clear

set -x

export AWS_PAGER=""

INSTANCES_ID_LIST=$(aws ec2 describe-instances \
                --filters "Name=tag:Name,Values=iaw-practica-09-*" \
                --query "Reservations[*].Instances[0].InstanceId" \
                --output text)

aws ec2 terminate-instances \
    --instance-ids $INSTANCES_ID_LIST