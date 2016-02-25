package com.kenlima.cihelper;

/**
 * Created by jwlee on 2016. 2. 24..
 */
public class ClassStruct {
    private final String className;
    private final String parentClassName;

    public ClassStruct(String className, String parentClassName) {
        this.className = className.trim();
        this.parentClassName = parentClassName.trim();
    }

    public String getClassName() {
        return className;
    }


    public String getParentClassName() {
        return parentClassName;
    }

    @Override
    public String toString() {
        return "<" + className + ":" + parentClassName + ">";
    }
}
